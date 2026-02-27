document.addEventListener("DOMContentLoaded", function () {
    loadMe();
});

function loadMe () {
    var out = document.querySelector("#me");
    fetch("me.php")
      .then(resp => resp.text())
      .then( txt => out.innerHTML = txt );
}

function runMarchingAnts() {
    let input = document.querySelector("#q1in").value;
    let out = document.querySelector("#q1out");
    let params = "ants=" + encodeURIComponent(input);
    fetch("marching-ants.php?"+params)
      .then(resp => resp.text() )
      .then( txt => out.innerHTML = txt );
}

function runFactorCalculator() {
    let input = document.querySelector("#q2-1in").value;
    let out = document.querySelector("#q2-1out");
    let params = "n=" + encodeURIComponent(input);
    fetch("factor-calculator.php", {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body : params
    })
      .then(resp => resp.text())
      .then( txt => out.innerHTML = txt );
}

function runErdosWoods() {
    let in1 = document.querySelector("#q2-2in1").value;
    let in2 = document.querySelector("#q2-2in2").value;
    let out = document.querySelector("#q2-2out");
    let params = "start=" + encodeURIComponent(in1) + "&end=" + encodeURIComponent(in2);
    fetch("erdos-woods.php", {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body : params
    })
      .then(resp => resp.text())
      .then( txt => out.innerHTML = txt );
}
