import './index.css';

// My modules / classes
import BannerSlider from "./modules/BannerSlider"


// Instantiate a new object using my modules/classes
const bannerSlider = new BannerSlider()

//Add classes to top header
// let headers = document.getElementsByClassName("header-widget");
// let classesArray = ["flex", "flex-row", "items-center", 'self-end'];
// for (var i = 0; i < headers.length; i++) {
//     for (var j=0; j<classesArray.length;j++) {
//         headers[i].classList.add(classesArray[j]);
//     }
// }

//Add current-cat class to All articles if selected (if we are in blog page)
const categoryAll = document.querySelectorAll('.cat-item-all');
let page = location.pathname;

if ( page === '/blog/' ) {
    categoryAll.forEach(element => {
        element.classList.add('current-cat');
    });

} else {
    categoryAll.forEach(element => {
        element.classList.remove('current-cat');
    });
}

//Read more
const showmoreButton = document.querySelectorAll('#show-more');

function toggleReadMore(e) {

    // get the current section parent. This will make the selection on other class items easier.
    const aboutInfo = e.target.closest('.gb-inside-container');
    const content = aboutInfo.querySelector('#content');
    const excerpt = aboutInfo.querySelector('#excerpt');

    if(e.target.textContent === 'Read More') {
        excerpt.style.display = 'none';
        content.classList.remove('hidden');
        e.target.innerText = "Read Less";
    } else {
        excerpt.style.display = 'block';
        content.classList.add('hidden');
        e.target.innerText = "Read More";
    }
}

showmoreButton.forEach(function(about) {
    about.addEventListener('click', toggleReadMore);
})



//Stats Counter

    const counters = document.querySelectorAll('#counter');
    const speed = 200;
    counters.forEach( counter => {

    const updateCount = () => {

    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    const inc = target/speed;
    //console.log (scroll);
    if( count<target) {
        counter.innerText = Math.ceil( count + inc );
        setTimeout( updateCount,1 );
    } else {
        count.innerText = target;
    }
 }
 updateCount();
});


