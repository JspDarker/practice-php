var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/pets-data.json');
ourRequest.onload = function() {

    if( ourRequest.status >= 200 && ourRequest.status <400) {
        var data = JSON.parse(ourRequest.responseText);
        console.log(data);
        createHTML(data);
    } else {
        console.log('We connected to server, but it returned an error');
    }
};

// handler error
ourRequest.onerror = function() {
    console.log('Connection error');
};

ourRequest.send();

// handlebars add method
Handlebars.registerHelper("calculateAge", function (birthYear) {
    return new Date().getFullYear() - birthYear;
});

function createHTML( petsData) {
    // console.log('testing from our function');
    // console.log(petsData);

    var rawTemplate = document.getElementById('petsTemplate').innerHTML;
    var compileTemplate = Handlebars.compile(rawTemplate);

    var ourGeneratedHTML = compileTemplate(petsData);

    var petsContainer = document.getElementById('pets-container');
    petsContainer.innerHTML = ourGeneratedHTML;


}
