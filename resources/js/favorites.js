export function initFavorites() {
    // Function to get cookie value by name
    function getCookie(name) {
        const cookieValue = document.cookie
            .split('; ')
            .find(cookie => cookie.startsWith(name + '='));

        return cookieValue ? decodeURIComponent(cookieValue.split('=')[1]) : null;
    }

    // Function to set a cookie with an expiration time in days
    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 24 * 60 * 60 * 1000).toUTCString();
        document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
    }

    function initFavorites() {
        let favorites = getFavorites();
        if (favorites === null) {
            favorites = [];
            setFavorites(favorites);
        }

        favorites.forEach(favoriteItem => {
            // Get the div elements by their IDs
            var heart = document.getElementById("heart-" + favoriteItem);
            if (heart) {
                heart.classList.add('fill-gray-1000');
                heart.classList.remove('fill-white');
            }

        });
        return favorites;
    }
    var favorites = initFavorites();

    // Function to add a favorite item to the end of the array
    function toggleFavoriteItem(id) {
        let favorites = getFavorites() || [];

        const index = favorites.indexOf(id);
        var heart = document.getElementById("heart-" + id);
        if (index === -1) {
            // Add the item to favorites if it's not already there
            favorites.push(id);
            if (heart) {
                heart.classList.add('fill-gray-1000');
                heart.classList.remove('fill-white');
            }
        } else {
            // Remove the item from favorites if it's already there
            favorites.splice(index, 1);
            if (heart) {
                heart.classList.remove('fill-gray-1000');
                heart.classList.add('fill-white');
            }
        }

        setFavorites(favorites);
    }
    // Function to get favorites from cookies and parse as JSON
    function getFavorites() {
        const cookieValue = getCookie('favorites');
        return cookieValue ? JSON.parse(cookieValue) : null;
    }
    // Function to set favorites as a JSON string in a cookie
    function setFavorites(array) {
        setCookie('favorites', JSON.stringify(array), 30);
    }

}

