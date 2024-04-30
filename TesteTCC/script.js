// const loginButton = document.querySelector('.login-button');
// const loginSection = document.querySelector('.login-section');

// loginButton.addEventListener('click', () => {
//     loginSection.style.display = 'flex';
// });

// loginSection.addEventListener('click', (e) => {
//     if (e.target === loginSection) {
//         loginSection.style.display = 'none';
//     }
// });

// const loginForm = document.querySelector('#login-form');
// const cadastroForm = document.querySelector('#cadastro-form');
// const cadastroLink = document.querySelector('#cadastro-link');

// cadastroLink.addEventListener('click', () => {
//     loginForm.style.display = 'none';
//     cadastroForm.style.display = 'block';
// });

// cadastroForm.addEventListener('submit', (e) => {
//     e.preventDefault();
//     const nome = document.querySelector('#nome').value;
//     const email = document.querySelector('#email').value;
//     const senha = document.querySelector('#senha').value;
//     // const confirmaSenha = document.querySelector('#confirma-senha').value;

//     // if (senha!== confirmaSenha) {
//     //     alert('As senhas não conferem');
//     //     return;
//     // }

//     // Aqui você pode fazer a chamada para o seu banco de dados para cadastrar o usuário
//     // Exemplo:
//     // const formData = new FormData();
//     // formData.append('nome', nome);
//     // formData.append('email', email);
//     // formData.append('senha', senha);
//     // fetch('cadastrar.php', {
//     //     method: 'POST',
//     //     body: formData
//     // })
//     //.then(response => response.json())
//     //.then(data => {
//     //     if (data.success) {
//     //         alert('Cadastro realizado com sucesso');
//     //         window.location.href = 'login.html';
//     //     } else {
//     //         alert('Erro ao cadastrar');
// });


// const carouselInner = document.querySelector('.carousel-inner');
// const carouselItems = document.querySelectorAll('.carousel-item');
// const carouselControlPrev = document.querySelector('.carousel-control-  prev');
// const carouselControlNext = document.querySelector('.carousel-control-next');

// let currentSlide = 0;
// let timer;

// function startCarousel() {
//     timer = setInterval(() => {
//         currentSlide = (currentSlide + 1) % carouselItems.length;
//         carouselItems.forEach((item, index) => {
//             item.classList.toggle('active', index === currentSlide);
//         });
//     }, 6500);
// }

// function stopCarousel() {
//     clearInterval(timer);
// }

// carouselControlPrev.addEventListener('click', () => {
//     stopCarousel();
//     currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
//     carouselItems.forEach((item, index) => {
//         item.classList.toggle('active', index === currentSlide);
//     });
//     startCarousel();
// });

// carouselControlNext.addEventListener('click', () => {
//     stopCarousel();
//     currentSlide = (currentSlide + 1) % carouselItems.length;
//     carouselItems.forEach((item, index) => {
//         item.classList.toggle('active', index === currentSlide);
//     });
//     startCarousel();
// });

// startCarousel();