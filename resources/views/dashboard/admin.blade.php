
<div class="container" style="max-width: 500px; margin: 3rem auto; text-align: center;">
	<div style="text-align:center; margin-bottom:2.5rem;">
		<img src="/imatges/logo-onu.svg" alt="Logo ONU" style="height:60px;">
	</div>
	<h1 class="mb-4" style="color: #1a237e;">ADMIN DASHBOARD</h1>
	<p style="font-size: 1.2rem;">Benvingut, <strong>{{ auth()->user()->name }}</strong></p>
	<p style="color: #1976d2; font-weight: 500;">ROL: {{ auth()->user()->role }}</p>

	<div class="mb-4 mt-4">
		<a href="/users" style="
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
		"
		onmouseover="this.style.background='linear-gradient(90deg,#1565c0 0%,#1976d2 100%)'"
		onmouseout="this.style.background='linear-gradient(90deg,#1976d2 0%,#42a5f5 100%)'"
		>Gestió d'usuaris</a>
		<a href="/organismes" style="
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
		"
		onmouseover="this.style.background='linear-gradient(90deg,#1565c0 0%,#1976d2 100%)'"
		onmouseout="this.style.background='linear-gradient(90deg,#1976d2 0%,#42a5f5 100%)'"
		>Gestió d'organismes</a>
	</div>
</div>

