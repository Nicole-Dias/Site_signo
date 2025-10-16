<?php include('header.php'); ?>
<<body>
    <div class="container fluid main-container d-flex align-items-center justify-container-center" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="content-wrapper text-center p-5" style="background-color: white;border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px;">
            <h1 class="title text-primary mb-3">Descubra seu signo</h1>
            <p class="subtitle text-muted mb-4">Digite sua data de nascimento e descruba mais sobre o seu signo.</p>

            <form id="form-signo" method="POST" action="Mostrar_signo_zodiaco.php">
                <div class="form-group">
                    <label for="dt_nascimento" class="form-label text-secondary">Data de Nascimento</label>
                    <input type="date" placeholder="Ex:19/08/1992" class="form-control" id="dt_nascimento" name="dt_nascimento"  required>
                </div>
                <button type="submit" class="btn btn-primary mt-4 w-100">Descobrir</button>
            </form>

            <footer class="footer mt-5">
                <p class="text-muted">Desenvolvido por: <strong>Nicole Dias</strong></p>
            </footer>
        </div>
    </div>
</body>
