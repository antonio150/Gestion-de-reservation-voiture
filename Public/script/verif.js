function verif_Char(chars) {
        // Caractères autorisés
        var regex = new RegExp("[A-Z]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
                chars.value = chars.value.charAt(0).toUpperCase() + chars.value.substring(1).toUpperCase();
            }
        }
    }

    function verif_Maj(chars) {
        // Caractères autorisés
        var regex = new RegExp("[A-Zé,è]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
             	chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
				chars.value = chars.value.charAt(0).toUpperCase() + chars.value.substring(1).toLowerCase();
            }
        }
    }

    function verif_Space(chars) {
        // Caractères autorisés
        var regex = new RegExp("[a-zA-Z0-9]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
                 
            }
        }
    }

     function verif_Space2(chars) {
        // Caractères autorisés
        var regex = new RegExp("[a-zA-Z0-9,à ]", "i");
        var valid;
        for (x = 0; x < chars.value.length; x++) {
            valid = regex.test(chars.value.charAt(x));
            if (valid == false) {
                chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
                 
            }
        }
    }

    