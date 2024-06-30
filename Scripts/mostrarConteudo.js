document.addEventListener('DOMContentLoaded', function() {
    function toggleElementVisibility(checkboxId) {
        const checkbox = document.getElementById(checkboxId);
        const targetId = checkbox.getAttribute('data-target');
        const targetElement = document.getElementById(targetId);

        if (checkbox.checked) {
            targetElement.style.display = 'flex'; // Mostra o elemento como flexbox
        } else {
            targetElement.style.display = 'none'; // Esconde o elemento
        }
    }

    document.querySelectorAll('.checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            toggleElementVisibility(this.id);
        });

        // Chama a função inicialmente para garantir que o estado inicial está correto
        toggleElementVisibility(checkbox.id);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    function toggleElementVisibility(radioName) {
        const radios = document.querySelectorAll(`input[name="${radioName}"]`);
        radios.forEach(function(radio) {
            const targetId = radio.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);
            if (radio.checked) {
                targetElement.style.display = 'flex'; // Mostra o elemento como flexbox
            } else {
                targetElement.style.display = 'none'; // Esconde o elemento
            }
        });
    }

    document.querySelectorAll('input[type="radio"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            toggleElementVisibility(this.name);
        });

        // Chama a função inicialmente para garantir que o estado inicial está correto
        toggleElementVisibility(radio.name);
    });
});