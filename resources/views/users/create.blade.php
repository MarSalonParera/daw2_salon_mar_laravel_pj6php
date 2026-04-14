<div style="min-height:100vh;background:linear-gradient(120deg,#e3f2fd 0%,#bbdefb 100%);display:flex;align-items:center;justify-content:center;">
<div style="width:100%;max-width:500px;">
<h1 style="color:#1a237e; text-align:center; margin-bottom:2rem;">Crear usuari</h1>

<form method="POST" action="/users" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 24px #1976d233; padding: 2.5rem 2rem;">
    @csrf


    <input name="name" placeholder="Nom" style="width:100%;padding:0.7rem 1rem;margin-bottom:1.2rem;border-radius:10px;border:1.5px solid #90caf9;font-size:1.08rem;outline:none;transition:border 0.2s;">
    <input name="email" placeholder="Email" style="width:100%;padding:0.7rem 1rem;margin-bottom:1.2rem;border-radius:10px;border:1.5px solid #90caf9;font-size:1.08rem;outline:none;transition:border 0.2s;">
    <input name="password" placeholder="Password" type="password" style="width:100%;padding:0.7rem 1rem;margin-bottom:1.2rem;border-radius:10px;border:1.5px solid #90caf9;font-size:1.08rem;outline:none;transition:border 0.2s;">

    <select name="role" style="width:100%;padding:0.7rem 1rem;margin-bottom:2rem;border-radius:10px;border:1.5px solid #90caf9;font-size:1.08rem;outline:none;transition:border 0.2s;">
        <option value="admin">admin</option>
        <option value="basic">basic</option>
    </select>

    <div style="text-align:center;">
        <button style="
            display: inline-block;
            background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            padding: 0.7rem 2.2rem;
            margin: 0 0.5rem 0.5rem 0;
            font-size: 1.1rem;
            box-shadow: 0 2px 8px #1976d233;
            transition: background 0.2s, box-shadow 0.2s;
            text-decoration: none;
            cursor:pointer;
        "
        onmouseover="this.style.background='linear-gradient(90deg,#1565c0 0%,#1976d2 100%)'"
        onmouseout="this.style.background='linear-gradient(90deg,#1976d2 0%,#42a5f5 100%)'"
        >Crear</button>
        <a href="/users" style="
            display: inline-block;
            background: linear-gradient(90deg, #757575 0%, #bdbdbd 100%);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            padding: 0.7rem 2.2rem;
            margin: 0 0.5rem 0.5rem 0;
            font-size: 1.1rem;
            box-shadow: 0 2px 8px #75757533;
            transition: background 0.2s, box-shadow 0.2s;
            text-decoration: none;
        "
        onmouseover="this.style.background='linear-gradient(90deg,#616161 0%,#757575 100%)'"
        onmouseout="this.style.background='linear-gradient(90deg,#757575 0%,#bdbdbd 100%)'"
        >Volver</a>
        <button type="reset" style="
            display: inline-block;
            background: linear-gradient(90deg, #ffb300 0%, #ffe082 100%);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            padding: 0.7rem 2.2rem;
            font-size: 1.1rem;
            box-shadow: 0 2px 8px #ffb30033;
            transition: background 0.2s, box-shadow 0.2s;
            text-decoration: none;
            cursor:pointer;
        "
        onmouseover="this.style.background='linear-gradient(90deg,#ffa000 0%,#ffb300 100%)'"
        onmouseout="this.style.background='linear-gradient(90deg,#ffb300 0%,#ffe082 100%)'"
        >Cancelar</button>
    </div>
</form>
</div>
</div>
