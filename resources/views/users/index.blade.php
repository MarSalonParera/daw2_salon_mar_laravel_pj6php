 @foreach ($users as $user)
             <div style="min-height:100vh;background:linear-gradient(120deg,#e3f2fd 0%,#bbdefb 100%);padding:2rem 0;">
                    <div style="max-width:700px;margin:0 auto;">
                        <h1 style="color:#1a237e;text-align:center;margin-bottom:2.5rem;letter-spacing:1px;">USUARIS</h1>
                        <div style="text-align:right;margin-bottom:2rem;">
                            <a href="/users/create" style="
                                display: inline-block;
                                background: linear-gradient(90deg, #1976d2 0%, #42a5f5 100%);
                                color: #fff;
                                font-weight: 600;
                                border: none;
                                border-radius: 30px;
                                padding: 0.7rem 2.2rem;
                                font-size: 1.1rem;
                                box-shadow: 0 2px 8px #1976d233;
                                transition: background 0.2s, box-shadow 0.2s;
                                text-decoration: none;
                                cursor:pointer;
                            " onmouseover="this.style.background='linear-gradient(90deg,#1565c0 0%,#1976d2 100%)'" onmouseout="this.style.background='linear-gradient(90deg,#1976d2 0%,#42a5f5 100%)'">
                                Crear usuari
                            </a>
                        </div>
                        @foreach ($users as $user)
                            <div style="padding: 1.5rem 1.2rem; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px #1976d233; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; gap: 1.5rem;">
                                <div style="font-size: 1.13rem; color: #222; font-weight: 500; letter-spacing:0.5px;">
                                    <span style="display:block;margin-bottom:0.2rem;">{{ $user->name }}</span>
                                    
                                </div>
                                <div style="display:flex;gap:0.5rem;">
                                    <a href="/users/{{ $user->id }}/edit" style="display:inline-block;background:linear-gradient(90deg,#ffb300 0%,#ffe082 100%);color:#fff;font-weight:600;border:none;border-radius:30px;padding:0.5rem 1.4rem;font-size:1rem;box-shadow:0 2px 8px #ffb30033;transition:background 0.2s;cursor:pointer;" onmouseover="this.style.background='linear-gradient(90deg,#ffa000 0%,#ffb300 100%)'" onmouseout="this.style.background='linear-gradient(90deg,#ffb300 0%,#ffe082 100%)'">Modificar</a>
                                    <form action="/users/{{ $user->id }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="display:inline-block;background:linear-gradient(90deg,#e53935 0%,#ff8a80 100%);color:#fff;font-weight:600;border:none;border-radius:30px;padding:0.5rem 1.4rem;font-size:1rem;box-shadow:0 2px 8px #e5393533;transition:background 0.2s;cursor:pointer;" onmouseover="this.style.background='linear-gradient(90deg,#b71c1c 0%,#e53935 100%)'" onmouseout="this.style.background='linear-gradient(90deg,#e53935 0%,#ff8a80 100%)'" onclick="return confirm('Estàs segur que vols esborrar aquest usuari?')">Borrar</button>
                                    </form>
                                    <a href="/users/{{ $user->id }}/pdf" style="display:inline-block;background:linear-gradient(90deg,#0288d1 0%,#b3e5fc 100%);color:#fff;font-weight:600;border:none;border-radius:30px;padding:0.5rem 1.4rem;font-size:1rem;box-shadow:0 2px 8px #0288d133;transition:background 0.2s;cursor:pointer;" onmouseover="this.style.background='linear-gradient(90deg,#0277bd 0%,#0288d1 100%)'" onmouseout="this.style.background='linear-gradient(90deg,#0288d1 0%,#b3e5fc 100%)'">Mostrar</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </a>
        </div>
    </div>
@endforeach
