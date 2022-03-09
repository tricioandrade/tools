<?php


namespace app\controller\globals;


class alert
{
    public static function errorMessage($message){
        echo self::style();
        echo "<div class='banner bg-red d-block text-center'>
                  <p>${message}</p>
                  <a href='' class='ml-3 btn bg-secondary text-light'>Fechar</a>
              </div>";
    }

    public static function sucessMessage($message){
        echo self::style();
        echo "<div class='banner bg-green d-block text-center'>
              <p>${message}</p>
              <a href='' class='ml-3 col-12 btn bg-secondary text-light'>Fechar</a>
              </div>";
        echo "";
    }

    private static function style()
    {
        return '
        
        <style>
            .banner {
                width: 50%;
                position: absolute;
                padding: 10px;
                color: white;
                left:25%;
                top:0;
                z-index: 999;
            }
            .bg-red {
                background: crimson;
            }
            
            .bg-green {
                background: rgba(1, 2, 2, 1);
                color: #FFFFFF;
            }
            
            .banner a{
                line-height: 0.7;
                background: white !important;
                color: #0c0a0a !important;
            }
        </style>
        
        ';
    }
}