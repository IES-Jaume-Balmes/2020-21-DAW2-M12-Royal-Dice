csrf = document.querySelector('meta[name="csrf-token"]').content;
async function refresh_user_data() {
    var resp = await fetch('cartamasalta/refresh', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf

        },
        body: JSON.stringify({ apuesta: apuesta })
    });
    store = await resp.json();
    document.getElementById('fichas').innerHTML = store.fichas + " FICHAS";
    fichas_user = store.fichas;
}