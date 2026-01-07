/* RESET KHUSUS AUTH */
.auth-page * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Arial, sans-serif;
}

/* BODY LOGIN SAJA */
.auth-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #0f172a, #020617);
    display: flex;
    align-items: center;
    justify-content: center;
}

/* LOGIN BOX */
.auth-box {
    width: 380px;
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 16px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.45);
}

.auth-box h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 26px;
    font-weight: 700;
}

.auth-box input {
    width: 100%;
    padding: 14px;
    margin-bottom: 16px;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
}

.auth-box button {
    width: 100%;
    padding: 14px;
    background: #f5b400;
    border: none;
    border-radius: 10px;
    font-weight: 700;
    cursor: pointer;
}
