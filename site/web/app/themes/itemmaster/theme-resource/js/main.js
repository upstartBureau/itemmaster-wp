(function(){
  'use strict'
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('body').style.opacity = '1'

    var Doc = document.querySelector('body')
    var burger = document.querySelector('.hamburger-menu')
    var bar = document.querySelector('.bar')
    var dropin = document.querySelector('.dropin')
    var logo = document.querySelector('.master-lo')
    var partner = document.querySelector('.partner-link')

    burger.addEventListener('click', function () {
      bar.classList.toggle('animate')
      dropin.classList.toggle('animate-menu')
      logo.classList.toggle('hide-menu-item')
      partner.classList.toggle('hide-menu-item')
    })

    var ScrollHandler = function (argument) {

      var header = document.querySelector('header')

      var rightLinks = document.querySelector('.right-hand-links')
      var leftLinks = document.querySelector('.left-hand-links')

      if (argument > 45) {
        burger.style.top = '5px'
        header.style.transition = 'all 300ms'
        logo.style.transition = 'all 300ms'
        header.style.height = '85px'
        if(dropin.classList.contains('animate-menu')) {
          dropin.style.top = '84px'
        }
        header.style.boxShadow = '0px 0px 10px 1px #d8e7ef'
        logo.style.height = '85px'
        logo.style.width = '96px'
        rightLinks.style.top = '15px'
        leftLinks.style.top = '15px'
      } else if (argument < 45){
        burger.setAttribute('style', '')
        header.setAttribute('style', '')
        if(dropin.classList.contains('animate-menu')) {
          dropin.setAttribute('style', '')
        }
        partner.setAttribute('style', '')
        logo.setAttribute('style', '')
        header.style.transition = 'all 300ms'
        logo.style.transition = 'all 300ms'
        rightLinks.setAttribute('style', '')
        leftLinks.setAttribute('style', '')
      }
    }

    var KnownPosition = 0
    var polling = false

    window.addEventListener('scroll', function (event) {
      var KnownPosition = window.scrollY
      if (!polling) {
        window.requestAnimationFrame(function () {
          ScrollHandler(KnownPosition)
          polling = false
        })
      }
      polling = true
    })

    var Carousel = document.getElementById('carousel')
    var CurrentSlide = 0
    var Slides = document.querySelectorAll('.slide')

    if (Carousel) {
      var NextSlide = function () {
          Slides[CurrentSlide].className = 'slide';
          CurrentSlide = (CurrentSlide + 1 ) % Slides.length;
          Slides[CurrentSlide].className = 'slide active';
      }
      var SlideInterval = setInterval(NextSlide, 2000);
    }
  })
})()
