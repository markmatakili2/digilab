document.addEventListener('DOMContentLoaded', function () {
    const verifiedCard = document.getElementById('verified-card');
    const unverifiedCard = document.getElementById('unverified-card');
    const personnelList = document.getElementById('personnel-list');
    const verificationForm = document.getElementById('verification-form');

    verifiedCard.addEventListener('click', function () {
        fetchPersonnelList('verified');
    });

    unverifiedCard.addEventListener('click', function () {
        fetchPersonnelList('unverified');
    });

    verificationForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(verificationForm);
        const name = formData.get('name');
        const username = formData.get('username');
        const status = formData.get('status');

        // Assuming an API endpoint to update personnel verification status
        fetch('/api/verify-personnel', {
            method: 'POST',
            body: JSON.stringify({ name, username, status }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                verificationForm.reset();
            })
            .catch(error => console.error('Error:', error));
    });

    function fetchPersonnelList(status) {
        fetch(`/api/personnel-list?status=${status}`)
            .then(response => response.json())
            .then(data => {
                personnelList.innerHTML = '';
                data.personnel.forEach(person => {
                    const personElement = document.createElement('div');
                    personElement.className = 'person';
                    personElement.textContent = `${person.name} (${person.username})`;
                    personnelList.appendChild(personElement);
                });
            })
            .catch(error => console.error('Error:', error));
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const labCentreCount = document.getElementById('lab-centre-count');
    const labTestsCheckboxes = document.getElementById('lab-tests-checkboxes');
    const registerForm = document.getElementById('register-form');

    // Fetch the number of available lab centres
    fetch('/api/lab-centres-count')
        .then(response => response.json())
        .then(data => {
            labCentreCount.textContent = data.count;
        })
        .catch(error => console.error('Error fetching lab centre count:', error));

    // Fetch the list of lab tests from the database
    fetch('/api/lab-tests')
        .then(response => response.json())
        .then(data => {
            data.labTests.forEach(test => {
                const label = document.createElement('label');
                label.innerHTML = `<input type="checkbox" name="labTests" value="${test.id}"> ${test.name}`;
                labTestsCheckboxes.appendChild(label);
            });
        })
        .catch(error => console.error('Error fetching lab tests:', error));

    // Handle the form submission
    registerForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(registerForm);
        const labCentre = {
            name: formData.get('name'),
            location: formData.get('location'),
            gprs: formData.get('gprs'),
            labTests: formData.getAll('labTests')
        };

        // Assuming an API endpoint to register a new lab centre
        fetch('/api/register-lab-centre', {
            method: 'POST',
            body: JSON.stringify(labCentre),
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                registerForm.reset();
                labCentreCount.textContent = parseInt(labCentreCount.textContent) + 1;
            })
            .catch(error => console.error('Error registering lab centre:', error));
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const testCategorySelect = document.getElementById('test-category');

    // Fetch the list of test categories from the database
    fetch('/api/test-categories')
        .then(response => response.json())
        .then(data => {
            data.categories.forEach(category => {
                const option = document.createElement('option');
                option.value = category.id;
                option.textContent = category.name;
                testCategorySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching test categories:', error));

    // Handle the add category form submission
    const addCategoryForm = document.getElementById('add-category-form');
    addCategoryForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(addCategoryForm);
        const category = {
            name: formData.get('category')
        };

        fetch('/api/add-category', {
            method: 'POST',
            body: JSON.stringify(category),
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                addCategoryForm.reset();
                // Optionally, refresh the category list
            })
            .catch(error => console.error('Error adding category:', error));
    });

    // Handle the add test form submission
    const addTestForm = document.getElementById('add-test-form');
    addTestForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(addTestForm);
        const test = {
            name: formData.get('test-name'),
            category: formData.get('test-category')
        };

        fetch('/api/add-test', {
            method: 'POST',
            body: JSON.stringify(test),
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                addTestForm.reset();
            })
            .catch(error => console.error('Error adding test:', error));
    });
});
// Handle the delete personnel form submission
document.getElementById('delete-personnel-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const personnel = {
        name: formData.get('personnel-name')
    };

    fetch('/api/delete-personnel', {
        method: 'POST',
        body: JSON.stringify(personnel),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            this.reset();
        })
        .catch(error => console.error('Error deleting personnel:', error));
});

// Handle the delete lab centre form submission
document.getElementById('delete-lab-centre-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const labCentre = {
        name: formData.get('lab-centre-name')
    };

    fetch('/api/delete-lab-centre', {
        method: 'POST',
        body: JSON.stringify(labCentre),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            this.reset();
        })
        .catch(error => console.error('Error deleting lab centre:', error));
});

// Handle the add admin form submission
document.getElementById('add-admin-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const admin = {
        name: formData.get('admin-name'),
        email: formData.get('admin-email'),
        password: formData.get('admin-password'),
        confirmPassword: formData.get('confirm-password')
    };

    if (admin.password !== admin.confirmPassword) {
        alert('Passwords do not match!');
        return;
    }

    fetch('/api/add-admin', {
        method: 'POST',
        body: JSON.stringify(admin),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            this.reset();
        })
        .catch(error => console.error('Error adding admin:', error));
});
