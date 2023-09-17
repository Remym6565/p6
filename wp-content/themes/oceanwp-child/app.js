window.addEventListener("load", (event) => {
    const plus = document.querySelectorAll(".plus");
    const num = document.querySelectorAll(".num");
    const minus = document.querySelectorAll(".minus");
    let count = 0;
    console.log(num)
    for(let i = 0; i < num.length; i++) {
        console.log(plus[i])
        console.log(num[i])
        let count = 0
        plus[i].addEventListener("click", function () {
            count += 1;
            num[i].innerHTML = count;
        })
    
        minus[i].addEventListener("click", function () {
            if (num[i].innerHTML == 0) {
                return;
            }
            count -= 1;
            num[i].innerHTML = count;
        })
    }
});