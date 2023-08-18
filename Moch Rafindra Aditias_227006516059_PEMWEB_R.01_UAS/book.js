
const listBooksCards = document.querySelectorAll('#list-book .card');

listBooksCards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    card.style.transform = 'scale(1.05)';
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = 'scale(1)';
  });
});


const serviceCards = document.querySelectorAll('#service .card');

serviceCards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    card.style.transform = 'scale(1.1)';
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = 'scale(1)';
  });
});


const socialMediaLinks = document.querySelectorAll('#social-media a.btn');

socialMediaLinks.forEach(link => {
  link.addEventListener('mouseenter', () => {
    link.style.transform = 'scale(1.1)';
  });

  link.addEventListener('mouseleave', () => {
    link.style.transform = 'scale(1)';
  });
});

document.addEventListener('DOMContentLoaded', () => {
    const serviceLink = document.querySelector('a[href="#about"]');
  
    serviceLink.addEventListener('click', (event) => {
      event.preventDefault();
  

      const targetId = serviceLink.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      const headerOffset = -240;
      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition = elementPosition - headerOffset;
  

      const screenHeight = window.innerHeight;
      const middleScreenPosition = screenHeight / 2;
      const scrollToPosition = offsetPosition - middleScreenPosition;
  
      window.scrollBy({
        top: scrollToPosition,
        behavior: 'smooth',
      });
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
    const lookLink = document.querySelector('a[href="#look"]');
  
    lookLink.addEventListener('click', (event) => {
      event.preventDefault();
  

      const targetId = lookLink.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      const headerOffset = -100;
      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition = elementPosition - headerOffset;
  
 
      const screenHeight = window.innerHeight;
      const middleScreenPosition = screenHeight / 2;
      const scrollToPosition = offsetPosition - middleScreenPosition;
  
      window.scrollBy({
        top: scrollToPosition,
        behavior: 'smooth',
      });
    });
  });
  

