const checkboxes = document.querySelectorAll('#filtro-container input[type="checkbox"]');


checkboxes.forEach(cb => {
    cb.addEventListener('change', () => {
      /* Verifica se apenas um esta com check */  
      if (cb.checked) {
        checkboxes.forEach(other => {
          if (other !== cb) other.checked = false;
        });

        const filter = cb.value;
        window.location.href = `/list?filter=${filter}`;
        cb.checked = true;
      }
      /* Verifica se nenhum esta selecionado */  
      else {

        const anyCheck = Array.from(checkboxes).some(c => c.checked);
        if (!anyCheck) {
          window.location.href = `/list`
        }

      }

    });
  });