document.addEventListener('DOMContentLoaded', () => {
    const steps = [...document.querySelectorAll('.form-step')];
    let idx = 0;
    const data = {};
  
    // Affiche l'étape idx et masque les autres
    const show = i => {
      steps.forEach((s, j) => s.classList.toggle('active', j === i));
    };
  
    // Boutons “Suivant”
    document.querySelectorAll('.btn-next').forEach(btn => {
      btn.addEventListener('click', () => {
        const form = steps[idx];
        if (!form.checkValidity()) return form.reportValidity();
  
        new FormData(form).forEach((v, k) => data[k] = v);
        idx++;
        show(idx);
      });
    });
  
    // Bouton “Envoyer”
    document.querySelector('.btn-submit').addEventListener('click', () => {
      const form = steps[idx];
      if (!form.checkValidity()) return form.reportValidity();
  
      new FormData(form).forEach((v, k) => data[k] = v);
  
      // Prépare le FormData pour l'envoi
      const fd = new FormData();
      Object.entries(data).forEach(([k, v]) => fd.append(k, v));
  
      fetch('save.php', { method: 'POST', body: fd })
        .then(response => response.text())               // on récupère d'abord tout en texte
        .then(text => {
          console.log('Réponse brute du serveur →', text);
          let j;
          try {
            j = JSON.parse(text);                         // on parse ensuite
          } catch (e) {
            throw new Error('Le serveur n’a pas renvoyé du JSON valide');
          }
          return j;
        })
        .then(j => {
          console.log('Objet JSON analysé →', j);
          if (j.error) throw new Error(j.error);
          if (!j.id)  throw new Error('Pas de clé `id` dans la réponse');
          alert('Inscription réussie ! ID = ' + j.id);
        })
        .catch(e => {
          console.error(e);
          alert('Erreur : ' + e.message);
        });
    });
  
    // Affiche la première étape au chargement
    show(0);
  });