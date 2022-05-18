// get input

function getInputValue() {
    var inputVal = document.getElementById('myInput').value;
    if (inputVal == '') {
        return alert('provide your derails!');
    }
    if (inputVal.includes('szsupunma')) {
        return alert(
            "Your files is in correct submit again",
        );
    } else {
        if (inputVal.includes('https://github.com/')) {
            her = 'https://dashboard.heroku.com/new?template=';
            herokulink = her.concat(inputVal);
            window.open(herokulink, 'blank');
        } else {
            return alert('provide your details in correct form!');
        }
    }
}

  
