const stars = document.querySelectorAll('.rating .star');
const ratingValue = document.querySelector('.rating input');

stars.forEach((item, idx)=> {
    item.addEventListener('click', function() {
        let click = 0;
        ratingValue.value = idx + 1;
        console.log(ratingValue.value)

        stars.forEach(i=>{
            i.classList.replace('checked', 'checked');
            i.classList.remove('checked')
        })
        for(let i=0; i<=stars.length; i++) {
            if(i <=idx) {
                stars[i].classList.replace('checked', 'checked');
                stars[i].classList.add('checked')
            } else {
                stars[i].style.setProperty('--i', click)
                click++
            }
        }
    })
})
