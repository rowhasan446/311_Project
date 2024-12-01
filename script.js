// Fetch participant data from the database
function loadParticipants() {
    // Fetch data using a backend API (e.g., PHP or Python with database connection)
    fetch('/api/getParticipants')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('participantTable');
            tableBody.innerHTML = '';
            data.forEach(participant => {
                const row = `<tr>
                    <td>${participant.P_ID}</td>
                    <td>${participant.P_Name}</td>
                    <td>${participant.Institution}</td>
                    <td>${participant.Phone}</td>
                    <td>
                        <button onclick="deleteParticipant(${participant.P_ID})">Delete</button>
                    </td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        });
}

// Add a new participant
document.getElementById('addParticipantForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('/api/addParticipant', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            loadParticipants();
        });
});

// Search participants
function searchParticipants() {
    const query = document.getElementById('searchBox').value;
    fetch(`/api/searchParticipants?query=${query}`)
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('participantTable');
            tableBody.innerHTML = '';
            data.forEach(participant => {
                const row = `<tr>
                    <td>${participant.P_ID}</td>
                    <td>${participant.P_Name}</td>
                    <td>${participant.Institution}</td>
                    <td>${participant.Phone}</td>
                    <td>
                        <button onclick="deleteParticipant(${participant.P_ID})">Delete</button>
                    </td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        });
}

// Delete a participant
function deleteParticipant(id) {
    if (confirm('Are you sure you want to delete this participant?')) {
        fetch(`/api/deleteParticipant?id=${id}`, {
            method: 'DELETE',
        })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                loadParticipants();
            });
    }
}

// Load participants on page load
document.addEventListener('DOMContentLoaded', loadParticipants);
