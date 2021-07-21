        <?php if( !$this->session->userdata( 'usuario' ) ) 
            {
                show_error('Sessão não validada', 403);
            } 
        ?>
        
        <!-- Navigation-->
        <?php include "base/navegacao-logout.php"?>
        
        <!-- Masthead-->
        <?php include "base/head.php"?>

        <!-- Portfolio Grid-->
        <?php include "portfolios/portfolio_grid.php"?>

        <!-- Contact-->
        <?php include "base/contato.php"?>

        <!-- Portfolio Modals-->
       
        <?php include "portfolios/portfolio_modal.php"?>

        <script> window.alert("Logado com sucesso!"); </script>