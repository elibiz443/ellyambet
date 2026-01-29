const menuBtn = document.getElementById('menu-btn')
const closeBtn = document.getElementById('close-btn')
const sidebar = document.getElementById('sidebar')
const overlay = document.getElementById('overlay')
const header = document.getElementById('main-header')
const headerInner = document.getElementById('header-inner')
const logo = document.getElementById('header-logo')
const headerCont = document.getElementById('header-content')
const contact = document.getElementById('contact-button')

function openSidebar() {
  sidebar.classList.remove('-translate-x-full')
  overlay.classList.remove('opacity-0', 'pointer-events-none')
  document.body.style.overflow = 'hidden'
}

function closeSidebar() {
  sidebar.classList.add('-translate-x-full')
  overlay.classList.add('opacity-0', 'pointer-events-none')
  document.body.style.overflow = ''
}

menuBtn.addEventListener('click', openSidebar)
closeBtn.addEventListener('click', closeSidebar)
overlay.addEventListener('click', closeSidebar)

let lastScroll = 0

window.addEventListener('scroll', () => {
  const currentScroll = window.scrollY

  if (currentScroll > 50) {
    headerInner.classList.remove('py-4')
    headerInner.classList.add('py-1')
    logo.classList.add('scale-75')
    logo.classList.remove('hover:scale-110')
    logo.classList.add('hover:scale-90')
    menuBtn.classList.add('scale-75')
    headerCont.classList.remove('text-[0.75rem]')
    headerCont.classList.add('text-[0.65rem]')
    contact.classList.add('scale-75')
  } else {
    headerInner.classList.remove('py-1')
    headerInner.classList.add('py-4')
    logo.classList.remove('scale-75')
    logo.classList.add('hover:scale-110')
    logo.classList.remove('hover:scale-90')
    menuBtn.classList.remove('scale-75')
    headerCont.classList.add('text-[0.75rem]')
    headerCont.classList.remove('text-[0.65rem]')
    contact.classList.remove('scale-75')
  }

  lastScroll = currentScroll
})
