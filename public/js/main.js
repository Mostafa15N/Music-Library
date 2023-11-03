// JavaScript-code om de zoekbalk en filters in de header te laten werken
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const genreFilter = document.getElementById('genreFilter');
    const artistFilter = document.getElementById('artistFilter');
    const muziekSingles = document.querySelector('.muziekSingles ul');
    const filterForm = document.getElementById('filterForm');

    // Functie om de muzieksingles opnieuw te tekenen op basis van filters
    function updateMuziekSingles() {
        const searchValue = searchInput.value.toLowerCase();
        const genreValue = genreFilter.value;
        const artistValue = artistFilter.value;

        // Stuur de filterwaarden naar de server en haal de bijgewerkte gegevens op
        fetch('filter.php?genre=' + genreValue + '&artist=' + artistValue)
            .then(response => response.json())
            .then(filteredSingles => {
                // Leeg de huidige lijst met muzieksingles
                muziekSingles.innerHTML = '';

                // Voeg hier de muzieksingles toe die aan de filters voldoen
                // Gebruik de 'filteredSingles'-array die je van de server hebt ontvangen
            });
    }

    // Luister naar het indienen van het filterformulier
    filterForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Voorkom standaardformulierinzending
        updateMuziekSingles(); // Roep de functie op om te filteren
    });

    // Roep updateMuziekSingles op om de initiële lijst met muzieksingles te laden
    updateMuziekSingles();
});


// JavaScript-code om de zoekbalk en filters in de header te laten werken
document.addEventListener('DOMContentLoaded', function () {
    // ...

    // Functie om de muzieksingles opnieuw te tekenen op basis van filters
    function updateMuziekSingles() {
        const searchValue = searchInput.value.toLowerCase();
        const genreValue = genreFilter.value;
        const artistValue = artistFilter.value;

        // Stuur de filterwaarden naar de server en haal de bijgewerkte gegevens op
        fetch('filter.php?genre=' + genreValue + '&artist=' + artistValue)
            .then(response => response.json())
            .then(filteredSingles => {
                // Leeg de huidige lijst met muzieksingles
                muziekSingles.innerHTML = '';

                // Voeg hier de muzieksingles toe die aan de filters voldoen
                // Gebruik de 'filteredSingles'-array die je van de server hebt ontvangen
            });
    }

    // Luister naar het indienen van het filterformulier
    filterForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Voorkom standaardformulierinzending
        updateMuziekSingles(); // Roep de functie op om te filteren
    });

    
});


