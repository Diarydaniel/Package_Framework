 // Désactive le clic droit
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault(); // Désactive le clic droit
        });

        // Désactive les raccourcis clavier
        document.onkeydown = function(e) {
            // Désactiver les touches courantes pour inspecter le code
            if (e.ctrlKey && (e.key === 'u' || e.key === 'U' || e.key === 'i' || e.key === 'I' || e.key === 'n' || e.key === 'N' || e.key === 's' || e.key === 'S' || e.key === 'p' || e.key === 'P' || e.key === 'f' || e.key === 'F' || e.key === 'r' || e.key === 'R' || e.key === 't' || e.key === 'T' || e.key === 'w' || e.key === 'W' || e.key === 'c' || e.key === 'C')) {
                e.preventDefault(); // Désactive plusieurs touches de raccourci
            }

            // Désactiver F12 (devtools)
            if (e.key === 'F12') {
                e.preventDefault(); // Désactive F12
            }

            // Désactiver F5 (recharger la page)
            if (e.key === 'F5') {
                e.preventDefault(); // Désactive F5
            }

            // Désactiver les touches pour les développeurs (Ctrl+Shift+I, Ctrl+Shift+J)
            if (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) {
                e.preventDefault();
            }

            // Désactiver Ctrl+U pour afficher le code source
            if (e.ctrlKey && e.key === 'u') {
                e.preventDefault();
            }
        };
