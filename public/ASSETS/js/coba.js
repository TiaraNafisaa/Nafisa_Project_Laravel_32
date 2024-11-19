function scrollToOrder() {
    document.getElementById("order").scrollIntoView({ behavior: "smooth" });
}

function submitOrder(event) {
    event.preventDefault();
    alert("Terima kasih, pesanan Anda telah diterima!");
}

document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = "Nafisa";
    const correctPassword = "Tiara";

    // mengambil username dan password yang diinput
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;


    if (username === correctUsername && password === correctPassword){
        alert('Betul')
        window.location.href = 'index.html';
    }else{
        alert('Username atau Password salah');
    }
});