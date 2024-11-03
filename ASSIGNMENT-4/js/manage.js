$(document).ready(function() {
    // Fetch initial game settings
    fetchSettings();

    // Fetch player scores
    fetchScores();

    // Form submission for updating settings
    $('#settings-form').submit(function(e) {
        e.preventDefault();
        const settingsData = $(this).serialize();

        $.ajax({
            url: 'php/update_settings.php',
            type: 'POST',
            data: settingsData,
            success: function(response) {
                alert('Settings updated successfully!');
            },
            error: function(xhr, status, error) {
                console.error('Error updating settings:', error);
            }
        });
    });

    // Go back to game page
    $('#back-to-game').click(function() {
        window.location.href = 'game.html';
    });

    // Fetch settings from the server
    function fetchSettings() {
        $.ajax({
            url: 'php/get_settings.php',
            type: 'GET',
            success: function(data) {
                const settings = JSON.parse(data);
                $('#difficulty').val(settings.difficulty);
                $('#speed').val(settings.speed);
                $('#theme').val(settings.theme);
            }
        });
    }

    // Fetch player scores from the server
    function fetchScores() {
        $.ajax({
            url: 'php/get_scores.php', // URL to the PHP file
            type: 'GET',
            success: function(data) {
                console.log('Received data:', data); // Log the response data
                
                // Check if data is an array
                if (Array.isArray(data)) {
                    const scoreTable = $('#score-table-body');
                    scoreTable.empty();
            
                    // Loop through the player objects
                    data.forEach(player => {
                        const row = `<tr>
                            <td>${player.username}</td>
                            <td>${player.score}</td>
                        </tr>`;
                        scoreTable.append(row);
                    });
                } else {
                    console.error('Expected data to be an array, but got:', data);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching scores:', error);
            }
        });
    }
    
});
