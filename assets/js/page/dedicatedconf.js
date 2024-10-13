const stockage01 = document.getElementById('stockage01');
const emplacement = document.getElementById('emplacement');
const dpst02 = document.getElementById('dpst02');
const stockage02 = document.getElementById('stockage02');
const raid1display = document.getElementById('raid1display');
const nameUser = document.getElementById('nameUser');
const nameUserspan = document.getElementById('nameUserspan');
const emailUser = document.getElementById('emailUser');
const emailUserspan = document.getElementById('emailUserspan');
const organisationUser = document.getElementById('organisationUser');
const organisationUserspan = document.getElementById('organisationUserspan');
const processeur = document.getElementById('processeur');
const processeurconf = document.getElementById('processeurconf');
const ram = document.getElementById('ram');
const ramconf = document.getElementById('ramconf');
const stockage01count = document.getElementById('stockage01count');
const stockage02count = document.getElementById('stockage02count');
const raid01count = document.getElementById('raid01count');
const raid01 = document.getElementById('raiddisque0');
const ipadresssupInput = document.querySelector('input[name="ipadresssupcmbh"]');
const ipadresscmbhcountSpan = document.getElementById('ipadresscmbhcount');
const ipadresssuparborInput = document.querySelector('input[name="ipadresssuparbor"]');
const ipadressarborcountSpan = document.getElementById('ipadressarborcount');
const reseauexploit = document.getElementById('reseauexploit');
const reseauexploitselected = document.getElementById('reseauexploitselected');
const systemeos = document.getElementById('systemeos');
const systemeosselected = document.getElementById('systemeosselected');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const organisationInput = document.getElementById('organisation');
const nomcount = document.getElementById('nomcount');
const prenomcount = document.getElementById('prenomcount');
const emailcount = document.getElementById('emailcount');
const facturationcycleselector = document.getElementById('facturationcycleselector');
const userCyclepaidspan = document.getElementById('userCyclepaidspan');
const SpanOfCombahton = document.getElementById("SpandeCombahton");
const displayResultSLPing = document.getElementById("displayResultSLPing");
const displayResultMCPing = document.getElementById("displayResultMCPing");
const buttonPingChecker = document.getElementById("buttonPingChecker");

function updateRamDisplay() {
    const selectedProcessor = processeur.options[processeur.selectedIndex].value;
    const isV4Processor = selectedProcessor.includes('v4');
    
    // Obtenir toutes les options de RAM
    const ramOptions = ram.options;

    // Parcourir toutes les options de RAM
    for (let i = 0; i < ramOptions.length; i++) {
        let option = ramOptions[i];
        if (option.textContent.includes('DDR4')) {
            // Afficher les options DDR4 et masquer les options DDR3 si le processeur est v4
            option.style.display = isV4Processor ? 'block' : 'none';
        } else if (option.textContent.includes('DDR3')) {
            // Masquer les options DDR3 et afficher les options DDR4 si le processeur n'est pas v4
            option.style.display = isV4Processor ? 'none' : 'block';
        }
    }
}

// Ajouter un écouteur d'événements sur le menu déroulant du processeur
processeur.addEventListener('change', updateRamDisplay);

// Appeler la fonction initialement pour définir l'état correct au chargement
updateRamDisplay();


function checkSelection() {
    UpdateRaid1 ()
    dpst02.style.display = stockage01.selectedIndex > 0 ? 'block' : 'none';
    function UpdateRaid1 () {
        stockage02.addEventListener('change', () => {
            raid1display.style.display = stockage01.selectedIndex === stockage02.selectedIndex ? 'block' : 'none';
        });
        stockage01.addEventListener('change', () => {
            raid1display.style.display = stockage01.selectedIndex === stockage02.selectedIndex ? 'block' : 'none';
        });
    }
}

stockage02.addEventListener('change', SetValueToRaid);
stockage01.addEventListener('change', SetValueToRaid);

function SetValueToRaid() {
    if (stockage01.selectedIndex === stockage02.selectedIndex) {
        return;
    } else {
        raid01.selectedIndex = 0;
    }
    if (stockage01.selectedIndex === 0) {
        raid1display.style.display = 'none';
    }
    if (stockage01.selectedIndex === 0) {
        stockage02.selectedIndex = 0;
    }
}

stockage01.addEventListener('change', checkSelection);
checkSelection();
setInterval(checkSelection, 1000);

function UptadeResult() {
    nameUser.addEventListener('input', () => {nameUserspan.textContent = nameUser.value;});
    emailUser.addEventListener('input', () => {emailUserspan.textContent = emailUser.value;});
    organisationUser.addEventListener('input', () => {organisationUserspan.textContent = organisationUser.value;});
    emplacement.addEventListener('change', () => {emplacementConf.textContent = emplacement.options[emplacement.selectedIndex].textContent;});
    processeur.addEventListener('change', () => {processeurconf.textContent = processeur.options[processeur.selectedIndex].textContent;});
    ram.addEventListener('change', () => {ramconf.textContent = ram.options[ram.selectedIndex].textContent;});
    stockage01.addEventListener('change', () => {stockage01count.textContent = stockage01.options[stockage01.selectedIndex].textContent;});
    stockage02.addEventListener('change', () => {stockage02count.textContent = stockage02.options[stockage02.selectedIndex].textContent;});
    raid01.addEventListener('change', () => {raid01count.textContent = raid01.options[raid01.selectedIndex].textContent;});
    ipadresssupInput.addEventListener('input', () => {ipadresscmbhcountSpan.textContent = ipadresssupInput.value;});
    ipadresssuparborInput.addEventListener('input', () => {ipadressarborcountSpan.textContent = ipadresssuparborInput.value;});
    reseauexploit.addEventListener('change', () => {reseauexploitselected.textContent = reseauexploit.options[reseauexploit.selectedIndex].textContent;});
    systemeos.addEventListener('change', () => {systemeosselected.textContent = systemeos.options[systemeos.selectedIndex].textContent;});
}

setInterval(UptadeResult, 1000);


const totalPriceElement = document.getElementById('totalpricetva');
const tvaElement = document.getElementById('tva');

function updateTotalPrice() {
    const emplacementPrice = parseFloat(emplacement.options[emplacement.selectedIndex].getAttribute('data-price')) || 0;
    const processeurPrice = parseFloat(processeur.options[processeur.selectedIndex].getAttribute('data-price')) || 0;
    const ramPrice = parseFloat(ram.options[ram.selectedIndex].getAttribute('data-price')) || 0;
    const stockage01Price = parseFloat(stockage01.options[stockage01.selectedIndex].getAttribute('data-price')) || 0;
    const stockage02Price = parseFloat(stockage02.options[stockage02.selectedIndex].getAttribute('data-price')) || 0;
    const raid01Price = parseFloat(raid01.options[raid01.selectedIndex].getAttribute('data-price')) || 0;
    const ipadresssupPrice = parseFloat(document.getElementById('adresseCombahthon').value) * parseFloat(document.getElementById('adresseCombahthon').getAttribute('data-price')) || 0;
    const ipadresssuparborPrice = parseFloat(document.getElementById('adresseArbor').value) * parseFloat(document.getElementById('adresseArbor').getAttribute('data-price')) || 0;
    const reseauexploitPrice = parseFloat(reseauexploit.options[reseauexploit.selectedIndex].getAttribute('data-price')) || 0;
    const systemeosPrice = parseFloat(systemeos.options[systemeos.selectedIndex].getAttribute('data-price')) || 0;
    const totalPrice = emplacementPrice + processeurPrice  + ramPrice + stockage01Price + stockage02Price + raid01Price + ipadresssupPrice + ipadresssuparborPrice + reseauexploitPrice + systemeosPrice;
    console.log(emplacementPrice)
    const tva = totalPrice * 0.20; 
    const FinalTTC = totalPrice + tva;

    totalPriceElement.textContent = FinalTTC.toFixed(2);
}


emplacement.addEventListener('change', updateTotalPrice);
processeur.addEventListener('change', updateTotalPrice);
ram.addEventListener('change', updateTotalPrice);
stockage01.addEventListener('change', updateTotalPrice);
stockage02.addEventListener('change', updateTotalPrice);
raid01.addEventListener('change', updateTotalPrice);
ipadresssupInput.addEventListener('input', updateTotalPrice);
ipadresssuparborInput.addEventListener('input', updateTotalPrice);
reseauexploit.addEventListener('change', updateTotalPrice);
systemeos.addEventListener('change', updateTotalPrice);
updateTotalPrice();

var emplacementSelect = document.getElementById("emplacement");
var adresseCombahthonInput = document.getElementById("adresseCombahthon");
var adresseCombahthonLabel = document.querySelector("label[for='ipadresssupcmbh']");

emplacementSelect.addEventListener("change", function() {
    function UpdateComabahtonLocalPrice() {
        adresseCombahthonInput.value = 0;
    }
    UpdateComabahtonLocalPrice();
    updateTotalPrice() 

    if (emplacementSelect.value === "MainCube DataCenter") {
        ipadresssuparborInput.textContent = "0";
        adresseCombahthonInput.setAttribute("disabled", true); // disable the input field
        adresseCombahthonLabel.style.display = "none";
        adresseCombahthonInput.style.display = "none";
        function SpanOfCombahtonRemoove () {
            ipadresscmbhcountSpan.textContent = "0";
        }
        UpdateComabahtonLocalPrice();
        updateTotalPrice();
        SpanOfCombahtonRemoove();
    } else {
        adresseCombahthonInput.removeAttribute("disabled"); // enable the input field
        adresseCombahthonLabel.style.display = "block";
        adresseCombahthonInput.style.display = "block";
        UpdateComabahtonLocalPrice();
        updateTotalPrice() 
        // Set the value to 1 if it was previously set to 0
        if (adresseCombahthonInput.value === "0") {
            adresseCombahthonInput.value = 0;
            UpdateComabahtonLocalPrice();
            updateTotalPrice() 
        }
    }
});


let numAttempts = 0;

function validateKey(event) {
    if (event.key === '-' || event.key === 'e' || event.key === '.' || event.key === '+' || event.key === 'E') {
      event.preventDefault(); // Empêcher la saisie des caractères indésirables
    }
  }

function getipadresssupInputifSup244() {
    if (ipadresssupInput.value > 244) {
        numAttempts++;
        
        if (numAttempts >= 3) {
           alert("Can't be more than 244 IP Adresses '(IPv4)'");
        } else if (numAttempts == 1) {
            alert("Can't be more than 244 IP Adresses '(IPv4)'");
        ipadresssupInput.value = 0;
        ipadresssupInput.textContent = "244";
        updateTotalPrice();
        
        } else {
            numAttempts = 0;
            updateTotalPrice();
        }
    }
}


function GetipadressInputIfArborSup244() {
    if (ipadresssuparborInput.value > 244) {
        numAttempts++;
        
        if (numAttempts >= 3) {
           alert("Can't be more than 244 IP Adresses '(IPv4)'");
        } else if (numAttempts == 1) {
            alert("Can't be more than 244 IP Adresses '(IPv4)'");
        ipadresssuparborInput.value = 0;
        ipadressarborcountSpan.textContent = "0";
        updateTotalPrice();
        
        } else {
            numAttempts = 0;
            updateTotalPrice();
        }
    }
}


// when click on ShowPingSlResult var display = block for ShowSlPing


buttonPingChecker.addEventListener("click", function() {
    displayResultSLPing.style.display = "block";
    displayResultMCPing.style.display = "block";

});






setInterval(getipadresssupInputifSup244, 500);
setInterval(GetipadressInputIfArborSup244, 500); 



