const initFavoritesJS = {
    getCookie: function (name) {
        const cookieValue = document.cookie
            .split("; ")
            .find((cookie) => cookie.startsWith(name + "="));
        return cookieValue
            ? decodeURIComponent(cookieValue.split("=")[1])
            : null;
    },

    setCookie: function (name, value, days) {
        const expires = new Date(
            Date.now() + days * 24 * 60 * 60 * 1000,
        ).toUTCString();
        document.cookie = `${name}=${encodeURIComponent(value)}; expires=${expires}; path=/`;
    },

    initFavorites: function () {
        let favorites = this.getFavorites(); // Use regular function to bind 'this'
        if (favorites === null) {
            favorites = [];
            this.setFavorites(favorites);
        }

        // Update the navbar counter
        let favorite_element = document.getElementById("favorites_numbers");
        if (favorite_element) {
            favorite_element.innerHTML = favorites.length;
        }

        favorites.forEach((favoriteItem) => {
            var heart = document.getElementById("heart-" + favoriteItem);
            //console.log(heart);
            if (heart) {
                heart.classList.remove("fill-white");
                heart.classList.add("fill-gray-1000");
            }
        });
        return favorites;
    },

    toggleFavoriteItem: function (id) {
        let favorites = this.getFavorites() || [];
        const index = favorites.indexOf(id);
        var heart = document.getElementById("heart-" + id);
        if (index === -1) {
            favorites.push(id);
            if (heart) {
                heart.classList.remove("fill-white");
                heart.classList.add("fill-gray-1000");
            }
        } else {
            favorites.splice(index, 1);
            if (heart) {
                heart.classList.remove("fill-gray-1000");
                heart.classList.add("fill-white");
            }
        }
        let favorite_element = document.getElementById("favorites_numbers");
        favorite_element.innerHTML = favorites.length;
        this.setFavorites(favorites);
    },

    getFavorites: function () {
        const cookieValue = this.getCookie("favorites"); // Use regular function to bind 'this'
        return cookieValue ? JSON.parse(cookieValue) : null;
    },

    setFavorites: function (array) {
        this.setCookie("favorites", JSON.stringify(array), 30);
        //console.log(JSON.stringify(array));
    },
};

export default initFavoritesJS;
