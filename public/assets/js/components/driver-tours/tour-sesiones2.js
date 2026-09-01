document.addEventListener('DOMContentLoaded', () => {
    const iniciarTutorialButton = document.getElementById(
        'navbar-iniciar-tutorial'
    );

    const cerrarTutorialButton = document.getElementById(
        'navbar-cerrar-tutorial'
    );

    if (!iniciarTutorialButton || !cerrarTutorialButton || !window.driver?.js) {
        return;
    }

    function actualizarBotonTutorial() {
        const estadoTutorial = localStorage.getItem('tutorial') || 'inactivo';
        const tutorialIniciado =
            estadoTutorial === 'activo' || estadoTutorial === 'pendiente';

        iniciarTutorialButton.innerHTML = tutorialIniciado
            ? '<i class="bi bi-arrow-repeat"></i> Repetir tutorial'
            : '<i class="bi bi-question-circle"></i> Iniciar tutorial';

        cerrarTutorialButton.hidden = !tutorialIniciado;

        cerrarTutorialButton.innerHTML =
            estadoTutorial === 'pendiente'
                ? '<i class="bi bi-check-circle"></i> Finalizar tutorial'
                : '<i class="bi bi-x-circle"></i> Cerrar tutorial';
    }

    const driver = window.driver.js.driver({
        allowClose: false,
        showProgress: true,
        disableActiveInteraction: true,
        advanceOnClick: true,
        stagePadding: 10,
        nextBtnText: 'Siguiente',
        prevBtnText: 'Atrás',
        doneBtnText: 'Finalizar',

        onDoneClick: () => {
            driver.destroy();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        },

        onDestroyStarted: () => {
            if (localStorage.getItem('tutorial') === 'activo') {
                localStorage.setItem('tutorial', 'pendiente');
            }

            driver.destroy();
        },

        onDestroyed: () => {
            document.body.classList.remove('tutorial-active');
            actualizarBotonTutorial();
        },

        steps: [
            {
                element: '#lista-integraciones',
                popover: {
                    title: 'Lista de integraciones',
                    description:
                        'Aquí puedes ver rápidamente los tipos de integración disponibles para explorar dentro de esta sección.'
                }
            },
            {
                element: '#tour-card-method',
                popover: {
                    title: 'Método de integración',
                    description:
                        'Indica el tipo de flujo de pago de la categoría, para identificarlo antes de entrar.'
                }
            },            
            {
                element: '#tour-card-description',
                popover: {
                    title: 'Descripción de la categoría',
                    description:
                        'Explica cuándo conviene usar este flujo para que elijas el ejemplo más adecuado.'
                    
                }
            },
            {
                element: '#tour-card-title',
                popover: {
                    title: 'Comercio Ejemplo',
                    description:
                        'Muestra un ejemplo para el tipo de integración que se está presentando.',
                        onNextClick: () => {
                        localStorage.setItem('tutorial', 'pendiente');
                        driver.destroy();

                        setTimeout(() => {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                        }, 0);
                    }
                }
            }
        ]
    });

    function iniciarTourSesiones2() {
        localStorage.setItem('tutorial', 'activo');
        document.body.classList.add('tutorial-active');
        actualizarBotonTutorial();
        driver.drive();
    }

    iniciarTutorialButton.addEventListener('click', iniciarTourSesiones2);

    cerrarTutorialButton.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();

        if (localStorage.getItem('tutorial') === 'pendiente') {
            localStorage.setItem('tutorial', 'inactivo');
            actualizarBotonTutorial();
            return;
        }

        localStorage.setItem('tutorial', 'pendiente');
        driver.destroy();
    });

    actualizarBotonTutorial();

    if (localStorage.getItem('tutorial') === 'pendiente') {
        iniciarTourSesiones2();
    }

    window.addEventListener('storage', (event) => {
        if (event.key === 'tutorial') {
            actualizarBotonTutorial();
        }
    });
});
