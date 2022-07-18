/* input pour le bouton radio contact_type */
checkboxType = document.getElementById('contact_type_3');
checkboxType.addEventListener('change', e => {
    if (e.target.checked) {
        document.getElementById("contact_type_radio_5").style.display = 'block';
        document.getElementById("contact_type_3").checked = true;
    }
    checkboxType = document.getElementById('contact_type_0');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_type_radio_5').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_type_1');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById("contact_type_radio_5").style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_type_2');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById("contact_type_radio_5").style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_type_3');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById("contact_type_radio_5").style.display = 'block';
            document.getElementById("contact_type_3").checked = true;
        }
    });
});

/* input pour le bouton radio contact_age */
checkboxAge = document.getElementById('contact_age_2');
checkboxAge.addEventListener('change', e => {
    if (e.target.checked) {
        document.getElementById("contact_age_radio_4").style.display = 'block';
        document.getElementById("contact_age_2").checked = true;
    }
    checkboxType = document.getElementById('contact_age_0');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_age_radio_4').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_age_1');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_age_radio_4').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_age_2');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_age_radio_4').style.display = 'block';
            document.getElementById("contact_age_2").checked = true;
        }
    });
});

/* input pour le bouton radio contact_known */
checkboxKnown = document.getElementById('contact_known_4');
checkboxKnown.addEventListener('change', e => {
    if (e.target.checked) {
        document.getElementById("contact_known_radio_6").style.display = 'block';
        document.getElementById("contact_known_4").checked = true;
    }
 
    checkboxType = document.getElementById('contact_known_0');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_known_radio_6').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_known_1');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_known_radio_6').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_known_2');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_known_radio_6').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_known_3');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_known_radio_6').style.display = 'none';
        }
    });
    checkboxType = document.getElementById('contact_known_4');
    checkboxType.addEventListener('change', e => {
        if (e.target.checked) {
            document.getElementById('contact_known_radio_6').style.display = 'block';
        }
    });
});
