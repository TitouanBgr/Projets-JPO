"use strict";
let cpt = 3;

function Des() {
  let compteur = document.getElementById("Compteur");
  if (cpt > 0) {
    for (let i = 1; i < 6; i++) {
      if (
        document.getElementById("des" + i).hasAttribute("false", false) == false
      ) {
        let aleatoire = Math.random() * 6 + 1;
        majDes("des" + i, Math.floor(aleatoire));
      }
    }
    cpt--;
    compteur.innerHTML = cpt;
    Ones();
    Twos();
    Threes();
    Fours();
    Fives();
    Sixes();
    brelan();
    smallstraight();
    largestraight();
    yahtzee();
    full();
    chance();
    carre();
  }
}

function majDes(id, nbr) {
  let des = document.getElementById(id);
  let content = `<img  id="${id}" src="img/${nbr}.png"/>`;
  des.innerHTML = content;
  des.value = nbr;
}

function desactiver(id) {
  let bloquer = document.getElementById(id);
  if (bloquer.hasAttribute("false", false) == false) {
    bloquer.setAttribute("false", false);
    bloquer.style = "border: 3px solid rgb(106, 233, 255); padding-top: 62px;";
  } else {
    bloquer.removeAttribute("false");
    bloquer.style = "none;";
  }
}

function Ones() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("1");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 1) {
        compteur++;
      }
    }
    let resultat = 1 * compteur;
    let Ones = document.getElementById("Ones");
    Ones.value = resultat;
  }
}

function Twos() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("2");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 2) {
        compteur++;
      }
    }
    let resultat = 2 * compteur;
    let Twos = document.getElementById("Twos");
    Twos.value = resultat;
  }
}
function Threes() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("3");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 3) {
        compteur++;
      }
    }
    let resultat = 3 * compteur;
    let Threes = document.getElementById("Threes");
    Threes.value = resultat;
  }
}
function Fours() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("4");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 4) {
        compteur++;
      }
    }
    let resultat = 4 * compteur;
    let Fours = document.getElementById("Fours");
    Fours.value = resultat;
  }
}
function Fives() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("5");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 5) {
        compteur++;
      }
    }
    let resultat = 5 * compteur;
    let Fives = document.getElementById("Fives");
    Fives.value = resultat;
  }
}
function Sixes() {
  let des = document.getElementsByClassName("des");
  let des2 = document.getElementById("6");
  if (des2.hasAttribute("disabled") == false) {
    let compteur = 0;
    for (let i = 0; i < des.length; i++) {
      if (des[i].value == 6) {
        compteur++;
      }
    }
    let resultat = 6 * compteur;
    let Sixes = document.getElementById("Sixes");
    Sixes.value = resultat;
  }
}

function chance() {
  let des2 = document.getElementById("cha");
  if (des2.hasAttribute("disabled") == false) {
    let chance = document.getElementById("chance");
    chance.value = sommeDes();
  }
}

function sommeDes() {
  let des = document.getElementsByClassName("des");
  let resultat = 0;
  for (let i = 0; i < des.length; i++) {
    resultat += parseInt(des[i].value);
  }
  let chance = document.getElementById("chance");
  return resultat;
}

function yahtzee() {
  let des2 = document.getElementById("yah");
  if (des2.hasAttribute("disabled") == false) {
    let des = document.getElementsByClassName("des");
    let yahtzee = document.getElementById("yahtzee");
    let cpt = 1;
    let val = des[0].value;
    for (let i = 1; i < des.length; i++) {
      if (des[i].value != val) {
        return (yahtzee.value = 0);
      }
    }

    return (yahtzee.value = 50);
  }
}

function brelan() {
  let des2 = document.getElementById("bre");
  if (des2.hasAttribute("disabled") == false) {
    let resultat = 0;
    let des = document.getElementsByClassName("des");
    let brelan = document.getElementById("brelan");
    brelan.value = 0;
    for (let j = 0; j < des.length; j++) {
      let val = des[j].value;
      let cpt = 0;
      for (let i = j + 1; i < des.length; i++) {
        if (des[i].value == val) {
          cpt++;
        }
        if (cpt == 2) {
          brelan.value = sommeDes();
        }
      }
    }
  }
}

function carre() {
  let des2 = document.getElementById("car");
  if (des2.hasAttribute("disabled") == false) {
    let resultat = 0;
    let des = document.getElementsByClassName("des");
    let carre = document.getElementById("carre");
    for (let j = 0; j < des.length; j++) {
      let val = des[j].value;
      let cpt = 0;
      for (let i = j + 1; i < des.length; i++) {
        if (des[i].value == val) {
          cpt++;
        }
        if (cpt == 3) {
          return (carre.value = sommeDes());
        }
      }
    }
    return (carre.value = 0);
  }
}

function full() {
  let des2 = document.getElementById("ful");
  if (des2.hasAttribute("disabled") == false) {
    let resultat = 0;
    let des = document.getElementsByClassName("des");
    let full = document.getElementById("full");
    for (let j = 0; j < des.length; j++) {
      let val = des[j].value;
      let cpt = 0;
      let cpt2 = 0;
      for (let i = j + 1; i < des.length; i++) {
        if (des[i].value == val) {
          cpt++;
        }
        if (cpt == 2) {
          let k = 0;
          while (k < des.length && des[k].value == val) {
            ++k;
          }
          let val2 = des[k].value;
          for (let z = k + 1; z < des.length; z++) {
            if (des[z].value == val2) {
              cpt2++;
            }
            if (cpt2 == 1) {
              return (full.value = 25);
            }
          }
        }
      }
    }
    return (full.value = 0);
  }
}

function des_element(nbr) {
  let des = document.getElementsByClassName("des");
  let cpt = 0;
  for (let i = 0; i < des.length; i++) {
    if (des[i].value == nbr) {
      cpt++;
    }
  }
  return cpt;
}

function largestraight() {
  let des2 = document.getElementById("gra");
  if (des2.hasAttribute("disabled") == false) {
    let largestraight = document.getElementById("largestraight");

    if (
      des_element(2) == 1 &&
      des_element(3) == 1 &&
      des_element(4) == 1 &&
      des_element(5) == 1 &&
      (des_element(6) == 1 || des_element(1) == 1)
    ) {
      return (largestraight.value = 40);
    }
    return (largestraight.value = 0);
  }
}
function smallstraight() {
  let des2 = document.getElementById("pet");
  if (des2.hasAttribute("disabled") == false) {
    let smallstraight = document.getElementById("smallstraight");
    if (
      des_element(3) >= 1 &&
      des_element(4) >= 1 &&
      ((des_element(1) >= 1 && des_element(2) >= 1) ||
        (des_element(2) >= 1 && des_element(5) >= 1) ||
        (des_element(5) >= 1 && des_element(6) >= 1))
    ) {
      return (smallstraight.value = 30);
    }
    return (smallstraight.value = 0);
  }
}

function m(k, i) {
  switch (k) {
    case 0:
      document.getElementById("phaute" + i).style.visibility = "visible";
      break;
    case 1:
      document.getElementById("pbasse" + i).style.visibility = "visible";
      break;
  }
}

function b(k, i) {
  switch (k) {
    case 0:
      if (tabhaute[i - 1].keep == false) {
        document.getElementById("pahaute" + i).style.visibility = "hidden";
      }
      break;
    case 1:
      if (tabbasse[i - 1].keep == false) {
        document.getElementById("pabasse" + i).style.visibility = "hidden";
      }
      break;
  }
}
function haute() {
  let i = 1;

  while (i < 7) {
    res = tahaute;
  }
  i++;
  let x = test_nb_x(i) * i;
}

function totall() {
  let res = 0;
  var total = document.getElementById("total");
  let tth = document.getElementById("pahaute");
  let ttb = document.getElementById("pabasse");
  let tempo = 0;
  for (var i = 0; i < 6; i++) {
    if (pahaute[i].keep == true) {
      res = res + pahaute[i].val;
      tth.innerHTML = res;
    }
  }
  tempo = res;

  for (i = 0; i < 7; i++) {
    if (pabasse[i].keep == true) {
      res = res + pabasse[i].val;
      ttb.innerHTML = res - tempo;
    }
  }

  if (tempo >= 63 && test_total_haute == false) {
    res = res + 35;
    test_total_haute = true;
  }
  total.innerHTML = res;
  return res;
}
