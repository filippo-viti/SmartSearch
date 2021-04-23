function showSuggestions(keyword) {
    if (keyword.length === 0) {
        document.getElementById("suggestions").innerHTML = "";
        return;
    }
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let cities = JSON.parse(this.responseText);
            let list = "";
            cities.forEach(city => list +=
                `<a href="/city/${city.geonameid}" class="list-group-item list-group-item-action">
                    ${city.name}, ${city.subcountry}, ${city.country}
                </a>`
            )
            document.getElementById("suggestions").innerHTML = list;
        }
    }
    xmlhttp.open("GET", "/city/autocomplete/" + keyword, true);
    xmlhttp.send();
}