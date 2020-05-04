<?php
    /**
     * STATUS = ALL OVER AGAIN
     *
     * @author Sabian Finogwar
     * @since 1.0.0
     */
    if ( ! defined( 'ABSPATH' ) ) {
    	exit; // Exit if accessed directly.
    }
    
    get_header();
    
    if ( astra_page_layout() == 'left-sidebar' ) :
    	get_sidebar();
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/astra-child/style.css">
</head>
<body>
	<div id="primary" <?php astra_primary_class(); ?>>
<?php
        astra_primary_content_top();
?>
        <p class="center">Current working directory:<br>
            <?php
                echo "( ".getcwd().' )<br>';
                path_exists("wp-content/themes/astra-child/style.css");
            ?>
        </p>
        <h1 class="center" style="padding-top:50px;"><?php get_the_title(get_post    (get_the_ID())) ?></h1>
        
        <div id="primary" class="content-area primary" >
            <div id="const" style="margin-left:auto;margin-right:auto;margin-bottom:50px;">
                <h2 class="title-header" style="text-shadow: 2px 2px 10px #CCC;text-align:center;">Under Construction!</h2>
                <p class="center" style="padding:10px;">
                    We're still working on this functionality but don't worry, we'll have the rest of it ready, soon! Check back later!
                </p>
            </div><!-- #const -->
            <div class="columns-2" style="margin-bottom:100px;">
                <div id="table-forms">
                    <h2 class="center">Testing Area</h2>
                    <p class="center">Currently testing forms to search within database.</p>
                    <div id="todos">
                        Coming soon:
                        <ul>
                            <li>Search and sort by date, type, count points</li>
                            <li>Update & add new entries</li>
                            <li>Visualizations</li>
                        </ul>
                    </div><!-- #todos -->
                    <!-- TODO: Table Search/Entry Forms -->
                    <div class="columns-2">
                        <div style="padding: 5%;">
                            <h3>Test Form Filter</h3>
                            <form action="wp-content/themes/astra-child/inc/auth/sabian_eg_workout_form.php" method="POST">
                                <label id="form-label" for ="date">Date:</label><br>
                                <input type="date" id="date" name="date"><br>
                                <label id="form-label" for ="type">Type:</label><br>
                                <select id="type">
                                    <option value="OMW">    OMW     </option>
                                    <option value="OMWx5">  OMWx5   </option>
                                    <option value="EKCx10"> EKCx10  </option>
                                    <option value="WPHx10"> WPHx10  </option>
                                </select><br>
                                <button id="form-button" type="submit" name="submit">Filter</button>
                            </form>
                        </div>
                        <div style="padding: 5%;">
                            <h3>Test Form Sort</h3>
                            <form action="wp-content/themes/astra-child/inc/auth/sabian_eg_workout_form.php">
                                <label id="form-label" for ="type">Type:</label><br>
                                <select id="type">
                                    <option value="Date">  Date     </option>
                                    <option value="Type">  Type     </option>
                                    <option value="Count"> Count    </option>
                                    <option value="Points">Points   </option>
                                </select><br>
                                <button id="form-button" type="submit" name="submit">Sort</button>
                            </form>
                        </div>
                    </div><!-- #column -->
                </div>
                <div class="center" id="table-display" style="height:500px    ;overflow:scroll;padding-left:10px;padding-right:10px;">
                    <?php db_display(); ?>
                </div><!-- #table-display -->
        	</div><!-- #columns-2 -->
<?php
            the_content();
	        astra_primary_content_bottom();
?>  
	    </div><!-- #primary -->
    </div><!-- other #primary -->
<?php
    if ( astra_page_layout() == 'right-sidebar' )
    {
        get_sidebar();
    }
    get_footer();
?>
</body>
</html>
