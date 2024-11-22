document.addEventListener('DOMContentLoaded', function() {
    loadUpcomingEvents();
    loadPastEvents();
    loadResearch();
    loadProjects();
    loadFreeClasses();
    loadResources();
    loadMentors();
    loadAmbassadors();
    loadVolunteers();
    loadMembers();
    loadPartners();
});

// Function to load upcoming events
function loadUpcomingEvents() {
    fetch('data/events/upcoming_event/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('upcoming-events-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading upcoming events:', error));
}

// Function to load past events
function loadPastEvents() {
    fetch('data/events/past_event/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('past-events-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading past events:', error));
}

// Function to load research content
function loadResearch() {
    fetch('data/research/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('research-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading research content:', error));
}

// Function to load projects content
function loadProjects() {
    fetch('data/projects/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('projects-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading projects content:', error));
}

// Function to load free classes content
function loadFreeClasses() {
    fetch('data/free_classes/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('free-classes-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading free classes content:', error));
}

// Function to load resources content
function loadResources() {
    fetch('data/resources/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('resources-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading resources content:', error));
}

// Function to load mentors content
function loadMentors() {
    fetch('data/mentors/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('mentors-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading mentors content:', error));
}

// Function to load ambassadors content
function loadAmbassadors() {
    fetch('data/ambassadors/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('ambassadors-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading ambassadors content:', error));
}

// Function to load volunteers content
function loadVolunteers() {
    fetch('data/volunteers/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('volunteers-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading volunteers content:', error));
}

// Function to load members content
function loadMembers() {
    fetch('data/members/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('members-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading members content:', error));
}

// Function to load partners content
function loadPartners() {
    fetch('data/partners/')
        .then(response => response.text())
        .then(data => {
            document.getElementById('partners-content').innerHTML = data;
        })
        .catch(error => console.error('Error loading partners content:', error));
}
