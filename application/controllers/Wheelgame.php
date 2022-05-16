<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wheelgame extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* Load front informative website*/
    function index(){
        $this->load->view('website/website');
    }

    /*
        Load Home Page
    */
    public function campaign($campaign = '') {
        $image = "";
        $url = "";
        $price = "";
        switch ($campaign) {
            case 'NZ-777':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "NZ-777.png",
                    "header" => "Spin the Wheel & win up to $1000 and 100 free spins",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6819&bid=1971",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'NZ-777S':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "NZ-777.png",
                    "header" => "Spin the Wheel & win up to $1000 and 100 free spins",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6866&bid=1971",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;   
            case 'NZ-Just':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "NZ-Just.png",
                    "header" => "Spin the Wheel & win up to $500 and 600 free spins",
                    "price" => "500",
                    "spin" => "600",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 600 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9186b_537c_&affid=288&siteid=9186&adid=537&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 600 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-JustS':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "NZ-Just.png",
                    "header" => "Spin the Wheel & win up to $500 and 600 free spins",
                    "price" => "500",
                    "spin" => "600",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 600 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9426b_537c_&affid=288&siteid=9426&adid=537&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 600 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-C-Leo-S':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NZ-C-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $1000 and 150 free spins",
                    "price" => "1000",
                    "spin" => "150",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 150 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697186&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 150 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-C-Leo-KE':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NZ-C-Leo-KE.png",
                    "header" => "Spin the Wheel & win up to $1000 and 150 free spins",
                    "price" => "1000",
                    "spin" => "150",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 150 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697184&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 150 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-C-Leo-CE':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NZ-C-Leo-CE.png",
                    "header" => "Spin the Wheel & win up to $1000 and 150 free spins",
                    "price" => "1000",
                    "spin" => "150",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 150 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697185&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 150 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-B-Leo-S':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "NZ-B-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $250 and 50 free spins",
                    "price" => "250",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $250 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697200&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $250 + 50 Free Spins",    
                            "price" => 250
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-B-Leo-KE':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "NZ-B-Leo-KE.png",
                    "header" => "Spin the Wheel & win up to $250 and 50 free spins",
                    "price" => "250",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $250 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697198&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $250 + 50 Free Spins",    
                            "price" => 250
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;  
            case 'NZ-B-Leo-CE':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "NZ-B-Leo-CE.png",
                    "header" => "Spin the Wheel & win up to $250 and 50 free spins",
                    "price" => "250",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $250 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697199&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $250 + 50 Free Spins",    
                            "price" => 250
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;                
            case 'NZ-Zee':
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NZ-Zee.png",
                    "header" => "Spin the Wheel & win up to $500 and 100 free spins",
                    "price" => "500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48955&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 100 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'NZ-ZeeS':
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NZ-Zee.png",
                    "header" => "Spin the Wheel & win up to $500 and 100 free spins",
                    "price" => "500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48956&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 100 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break; 
            case 'NZ-Wil-KE':
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "NZ-Wil-KE.png",
                    "header" => "Spin the Wheel & win 100% up to 500 NZD + 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169528",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'NZ-Wil-C':
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "NZ-Wil-C.png",
                    "header" => "Spin the Wheel & win 100% up to 500 NZD + 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169501",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;     
            case 'NZ-Ri-KE':
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "NZ-Ri-KE.png",
                    "header" => "Spin the Wheel & win 100% bonus up to $200 + 50 free spins",
                    "price" => "200",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $200 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169657",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $200 + 50 Free Spins",    
                            "price" => 200
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'NZ-Ri-C':
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "NZ-Ri-C.png",
                    "header" => "Spin the Wheel & win 100% bonus up to $200 + 50 free spins",
                    "price" => "200",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $200 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169654",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $200 + 50 Free Spins",    
                            "price" => 200
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'NZ-MrB-KE':
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "NZ-MrB-KE.png",
                    "header" => "Spin the Wheel & win up to 400% bonus and $1500",
                    "price" => "1500",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot 400% bonus and $1500",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "400% Bonus",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_NZ-FREECA-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot 400% bonus and $1500",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'NZ-MrB-C':
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "NZ-MrB-C.png",
                    "header" => "Spin the Wheel & win up to 400% bonus and $1500",
                    "price" => "1500",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot 400% bonus and $1500",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "400% Bonus",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_NZ-ABBIE-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot 400% bonus and $1500",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;    
            case 'NZ-dunder':
                $data = array(
                    "backgroundImage" => "dunderbg.png",
                    "buttonColor" => "#b06cac",
                    "winnerImage" => "winnerdunderbg.png",
                    "image" => "NZ-dunder.png",
                    "header" => "Spin The Wheel and get $600 and 200 Free Spins",
                    "price" => "600",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $600 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "Congratulations,",
                    "fullWinnerLabel" => "Congratulations, Claim your $600 and 200 Free Spins now!",
                    "freeSpinLabel" => "Free Spins now!",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=167087",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $600 + 200 Free Spins",    
                            "price" => 600
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;               
            case 'CA-777':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-777.png",
                    "header" => "Spin the Wheel & win up to $1000 and 100 free spins",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6819&bid=1970",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'CA-777S':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-777.png",
                    "header" => "Spin the Wheel & win up to $1000 and 100 free spins",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6866&bid=1970",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'CA-Just':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-Just.png",
                    "header" => "Spin the Wheel & win up to $500 and 600 free spins",
                    "price" => "500",
                    "spin" => "600",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 600 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9186b_537c_&affid=288&siteid=9186&adid=537&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 600 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'CA-JustS':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-Just.png",
                    "header" => "Spin the Wheel & win up to $500 and 600 free spins",
                    "price" => "500",
                    "spin" => "600",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 600 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9426b_537c_&affid=288&siteid=9426&adid=537&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 600 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break; 
            case 'CA-Zee':
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "CA-Zee.png",
                    "header" => "Spin the Wheel & win up to $1500 and 150 free spins",
                    "price" => "1500",
                    "spin" => "150",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 150 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48953&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 150 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'Playze_CA':
                $data = array(
                    "backgroundImage" => "playzebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnerplayzebg.png",
                    "image" => "Playze_CA.png",
                    "header" => "Spin the Wheel & win up to $1000 and 50 free spins",
                    "price" => "1000",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "disclaimer" => "This offer is not available for players residing in Ontario",
                    "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=46913&bid=1575&subid=CA",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 50 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;    
            case 'CA-ZeeS':
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "CA-Zee.png",
                    "header" => "Spin the Wheel & win up to $1500 and 150 free spins",
                    "price" => "1500",
                    "spin" => "150",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 150 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48954&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 150 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break; 
            case 'CA-B-Leo-S':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "CA-B-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $500 and 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697197&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break; 
            case 'CA-B-Leo-KE':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "CA-B-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $500 and 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697195&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'CA-B-Leo-CE':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "CA-B-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $500 and 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697196&lpid=686&bid=16611",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break; 
            case 'CA-Safe-KE':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#820000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-Safe-KE.png",
                    "header" => "Spin the Wheel & win 100% bonus up to 1000 CAD and 50 free spins",
                    "price" => "1000",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.betsafe.com/_GWm34-Uyrra0S4M-4tL-2mNd7ZgqdRLk/1/?payload=%%test%%",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 50 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'Betsafes_CA':
                $data = array(
                    "backgroundImage" => "betsafesbg.png",
                    "buttonColor" => "#820000",
                    "winnerImage" => "winnerbetsafesbg.png",
                    "image" => "Betsafes_CA.png",
                    "header" => "Spin the Wheel & win up to $1000 and 50 free spins",
                    "price" => "1000",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://sempected-wompted.com/c386e574-b6bd-40a1-9f4a-ba174c7e58eb",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 50 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'CA-Safe-C':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#820000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-Safe-C.png",
                    "header" => "Spin the Wheel & win 100% bonus up to 1000 CAD and 50 free spins",
                    "price" => "1000",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.betsafe.com/_GWm34-Uyrra0S4M-4tL-2mNd7ZgqdRLk/1/?payload=%%CA-ABBIE-(JAV)%%",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 50 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'CA-MrB-KE':
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "CA-MrB-KE.png",
                    "header" => "Spin The Wheel & win a 400% bonus up to 2250 CAD !!!",
                    "price" => "2250",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "CAD",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Jackpot 400% bonus up to 2250 CAD !!!",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_CA-FREECA-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST 50 CAD",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN 150 CAD",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot 400% bonus up to 2250 CAD !!!",    
                            "price" => 2250
                        ),
                        array(
                            "name" => "YOU WIN 10 CAD",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST 25 CAD",    
                            "price" => 25   
                        )
                    )
                );                  
                break; 
            case 'CA-MrB-C':
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "CA-MrB-C.png",
                    "header" => "Spin The Wheel & win a 400% bonus up to 2250 CAD !!!",
                    "price" => "2250",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "CAD",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Jackpot 400% bonus up to 2250 CAD !!!",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_CA-ABBIE-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST 50 CAD",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN 150 CAD",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot 400% bonus up to 2250 CAD !!!",    
                            "price" => 2250
                        ),
                        array(
                            "name" => "YOU WIN 10 CAD",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST 25 CAD",    
                            "price" => 25   
                        )
                    )
                );                  
                break;                                    
            case 'NOR-lucky':             
                $data = array(
                    "backgroundImage" => "bluebg.png",
                    "buttonColor" => "#007687",                    
                    "winnerImage" => "winnerbluebg.png",
                    "image" => "NOR-777.png",
                    "header" => "Vinn til 10000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=5520&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NOR-luckyS':             
                $data = array(
                    "backgroundImage" => "bluebg.png",
                    "buttonColor" => "#007687",                    
                    "winnerImage" => "winnerbluebg.png",
                    "image" => "NOR-777.png",
                    "header" => "Vinn til 10000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=5827&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;     
            case 'NOR-777':    
                $data = array(
                    "backgroundImage" => "gatebg.png",
                    "buttonColor" => "#32baa2",                    
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NOR-777.png",
                    "header" => "Vinn til 10000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6819&amp;bid=1973",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break; 
            case 'NOR-777S':    
                $data = array(
                    "backgroundImage" => "gatebg.png",
                    "buttonColor" => "#32baa2",                    
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NOR-777.png",
                    "header" => "Vinn til 10000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://begin.gate777.com/redirect.aspx?pid=6866&bid=1973",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500  
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Just':    
                $data = array(
                    "backgroundImage" => "gatebg.png",
                    "buttonColor" => "#32baa2",                    
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NO-Just.png",
                    "header" => "Vinn til 5000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9186b_643c_&affid=288&siteid=9186&adid=643&c=",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 100 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-C-Leo-S':    
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",                    
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NO-C-Leo-S.png",
                    "header" => "Få opptil 6 000 kr. + 100 gratisspinn i velkomstbonus!",
                    "price" => "6000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 6000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "Få opptil",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3662157&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 6000 kr + 100 GRATISSPINN",    
                            "price" => 6000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-C-Leo-KE':    
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",                    
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NO-C-Leo-S.png",
                    "header" => "Få opptil 6 000 kr. + 100 gratisspinn i velkomstbonus!",
                    "price" => "6000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 6000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#fcf2b5",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "Få opptil",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3599484&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 6000 kr + 100 GRATISSPINN",    
                            "price" => 6000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-C-Leo-CE':    
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",                    
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "NO-C-Leo-S.png",
                    "header" => "Få opptil 6 000 kr. + 100 gratisspinn i velkomstbonus!",
                    "price" => "6000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 6000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#fcf2b5",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "Få opptil",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3659283&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 6000 kr + 100 GRATISSPINN",    
                            "price" => 6000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;    
            case 'NO-JustS':    
                $data = array(
                    "backgroundImage" => "gatebg.png",
                    "buttonColor" => "#32baa2",                    
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NO-Just.png",
                    "header" => "Vinn til 5000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wlbetpoint.adsrv.eacdn.com/C.ashx?btag=a_9426b_643c_&affid=288&siteid=9426&adid=643&c=",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 100 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Zee':    
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NO-Zee.png",
                    "header" => "Vinn til 15000 kr + 150 gratisspinn i velkomstbonuss",
                    "price" => "15000",
                    "spin" => "150",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 kr + 150 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48957&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 15000 kr + 150 GRATISSPINN",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'No-freeca-zee':    
                $data = array(
                    "backgroundImage" => "playzeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnerplayzeebg.png",
                    "image" => "No-freeca-zee.png",
                    "header" => "Spinn nå for å motta 15,000 kr gratis og 150 gratisspinn!",
                    "price" => "15000",
                    "spin" => "150",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 kr + 150 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "fullWinnerLabel" => "Gratulerer, 15 000 kr gratis og 150 gratisspinn!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=60761&bid=1575",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 15000 kr + 150 GRATISSPINN",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'No-velkomst-zee':    
                $data = array(
                    "backgroundImage" => "playzeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnerplayzeebg.png",
                    "image" => "No-velkomst-zee.png",
                    "header" => "Spinn nå for å motta 15,000 kr gratis og 150 gratisspinn!",
                    "price" => "15000",
                    "spin" => "150",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 kr + 150 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "fullWinnerLabel" => "Gratulerer, 15 000 kr gratis og 150 gratisspinn!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=60762&bid=1575",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 15000 kr + 150 GRATISSPINN",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-ZeeS':    
                $data = array(
                    "backgroundImage" => "zeebg.png",
                    "buttonColor" => "#1fb6b1",
                    "winnerImage" => "winnergatebg.png",
                    "image" => "NO-ZeeS.png",
                    "header" => "Vinn til 5000 kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.zeepartners.com/redirect.aspx?pid=48958&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 100 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Wil-KE':    
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "NO-Wil-KE.png",
                    "header" => "Få opptil 5000 NOK + 200 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "200",
                    "startAmount" => 1000,
                    "currency" => "NOK",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 NOK + 200 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169620",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 NOK",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 NOK",    
                            "price" => 500  
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 NOK + 200 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 NOK",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 NOK",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Wil-C':    
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "NO-Wil-C.png",
                    "header" => "Få opptil 5000 NOK + 200 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "200",
                    "startAmount" => 1000,
                    "currency" => "NOK",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 NOK + 200 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169586",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 NOK",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 NOK",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 NOK + 200 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 NOK",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 NOK",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Ri-KE':    
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "NO-Ri-KE.png",
                    "header" => "Få opptil 1000 Kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 1000 Kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169681",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 Kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 Kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 1000 Kr + 100 GRATISSPINN",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "DU VANT 3000 Kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 Kr",    
                            "price" => 900   
                        )
                    )
                );                
                break; 
            case 'NO-Ri-C':    
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "NO-Ri-C.png",
                    "header" => "Få opptil 1000 Kr + 100 gratisspinn i velkomstbonuss",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 1000 Kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169665",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 Kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 Kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 1000 Kr + 100 GRATISSPINN",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "DU VANT 3000 Kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 Kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-MrB-KE':    
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "NO-MrB-KE.png",
                    "header" => "Få opptil 15000 NOK og 400 % i velkomstbonus",
                    "price" => "15000",
                    "spin" => "",
                    "startAmount" => 1000,
                    "currency" => "NOK",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 NOK og 400 % i velkomstbonus",
                    "wonLabel" => "GRATULERER!",
                    "freeSpinLabel" => "400 % Bonus",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "FÅ OPPTIL",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_NO-FREECA-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 NOK",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 NOK",    
                            "price" => 50   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "15000 NOK og 400 % bonus",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 NOK",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 NOK",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-MrB-C':    
                $data = array(
                    "backgroundImage" => "mrbetbg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnermrbetbg.png",
                    "image" => "NO-MrB-C.png",
                    "header" => "Få opptil 15000 NOK og 400 % i velkomstbonus",
                    "price" => "15000",
                    "spin" => "",
                    "startAmount" => 1000,
                    "currency" => "NOK",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 NOK og 400 % i velkomstbonus",
                    "wonLabel" => "GRATULERER!",
                    "freeSpinLabel" => "400 % Bonus",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "FÅ OPPTIL",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://promo.mr.bet/?lp=mb_reg&trackCode=aff_aed67d_107_NO-SIGNE-WHEEL(JAV)",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 NOK",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 NOK",    
                            "price" => 50   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "15000 NOK og 400 % bonus",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 NOK",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 NOK",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-C-SpinA':    
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "NO-C-SpinA.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2855&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-K-SpinA':    
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "NO-K-SpinA.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2849&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-21-spinn':    
                $data = array(
                    "backgroundImage" => "21bg.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winner21bg.png",
                    "image" => "NO-21-spinn.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 1000 gratisspinn!",
                    "price" => "10000",
                    "spin" => "1000",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 1000 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer,",
                    "fullWinnerLabel" => "Gratulerer, 10 000 kr gratis og 1000 gratisspinn!",
                    "freeSpinLabel" => "gratisspinn!",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://afftrack21.21.partners/C.ashx?btag=a_11838b_457c_&affid=288&siteid=11838&adid=457&c=",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;    
            case 'NO-velkomst1-SpinA':    
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "NO-K-SpinA.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2931&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-velkomst-SpinA':    
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "NO-K-SpinA.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2922&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-freeca-SpinA':    
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "NO-K-SpinA.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2848&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;            
            case 'NO-C-Wheel':    
                $data = array(
                    "backgroundImage" => "wheelbg.png",
                    "buttonColor" => "#195e22",                    
                    "winnerImage" => "winnerwheelbg.png",
                    "image" => "NO-C-Wheel.png",
                    "header" => "Spinn nå for å motta 3,000 kr gratis og 100 gratisspinn",
                    "price" => "3000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 3000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=179994",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 3000 kr + 100 GRATISSPINN",    
                            "price" => 3000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-K-Wheel':    
                $data = array(
                    "backgroundImage" => "wheelbg.png",
                    "buttonColor" => "#195e22",                    
                    "winnerImage" => "winnerwheelbg.png",
                    "image" => "NO-K-Wheel.png",
                    "header" => "Spinn nå for å motta 3,000 kr gratis og 100 gratisspinn",
                    "price" => "3000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 3000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=179982",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 3000 kr + 100 GRATISSPINN",    
                            "price" => 3000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;                        
            case 'NZ-21':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "NZ-21.png",
                    "header" => "Spin the Wheel & win up to $1000 and 1000 free spins",
                    "price" => "1000",
                    "spin" => "1000",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",                    
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 1000 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wl21com.adsrv.eacdn.com/C.ashx?btag=a_1125b_639c_&affid=288&siteid=1125&adid=639&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 1000 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;
            case 'CA-21':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-21.png",
                    "header" => "Spin the Wheel & win up to $1000 and 1000 free spins",
                    "price" => "1000",
                    "spin" => "1000",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 1000 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wl21com.adsrv.eacdn.com/C.ashx?btag=a_1125b_639c_&affid=288&siteid=1125&adid=639&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-21S':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-21.png",
                    "header" => "Spin the Wheel & win up to $1000 and 1000 free spins",
                    "price" => "1000",
                    "spin" => "1000",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 1000 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://wl21com.adsrv.eacdn.com/C.ashx?btag=a_9186b_457c_&affid=288&siteid=9426&adid=457&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 100 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;        
            case 'CA-lucky':
                $data = array(
                    "backgroundImage" => "redbg.png",
                    "buttonColor" => "#5f0000",
                    "winnerImage" => "winnerredbg.png",
                    "image" => "CA-lucky.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=5269&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-Lucky-KE':
                $data = array(
                    "backgroundImage" => "bluebg.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerbluebg.png",
                    "image" => "CA-Lucky-KE.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "disclaimer" => "This offer is not available for players residing in Ontario",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=5903&bid=1509",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;    
            case 'CA-C-Leo-S':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "CA-C-Leo-S.png",
                    "header" => "Spin the Wheel & win up to $1000 and 200 free spins",
                    "price" => "1000",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697183&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 200 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-C-Leo-KE':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "CA-C-Leo-KE.png",
                    "header" => "Spin the Wheel & win up to $1000 and 200 free spins",
                    "price" => "1000",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697178&bid=13158",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 200 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-C-Leo-CE':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "CA-C-Leo-CE.png",
                    "header" => "Spin the Wheel & win up to $1000 and 200 free spins",
                    "price" => "1000",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3697182&lpid=686&bid=13186",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 200 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-Wil-KE':
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "CA-WilKE.png",
                    "header" => "Spin the Wheel & CLAIM YOUR $20 + 25 free spins NOW!",
                    "price" => "20",
                    "spin" => "25",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $20 + 25 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "disclaimer" => "This offer is not available for players residing in Ontario",
                    "url" => "https://keyaff.com/l/?id=165612",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $20 + 25 Free Spins",    
                            "price" => 20
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'wildzs_CA':
                $data = array(
                    "backgroundImage" => "wildzsbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzsbg.png",
                    "image" => "wildzs.png",
                    "header" => "Spin the Wheel & CLAIM YOUR $20 + 25 free spins NOW!",
                    "price" => "20",
                    "spin" => "25",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $20 + 25 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://sempected-wompted.com/4a5fd427-e50f-438f-adde-6905012023e2",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $20 + 25 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-Wil-C':
                $data = array(
                    "backgroundImage" => "wildzbg.png",
                    "buttonColor" => "#4a206b",
                    "winnerImage" => "winnerwildzbg.png",
                    "image" => "CA-Wil-C.png",
                    "header" => "Spin the Wheel & win 100% up to 500 USD + 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "disclaimer" => "This offer is not available for players residing in Ontario",
                    "url" => "https://keyaff.com/l/?id=169555",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-Ri-KE':
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "CA-Ri-KE.png",
                    "header" => "Spin the Wheel & win 100% bonus up to 500 CAD + 50 free spins",
                    "price" => "500",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=164732",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 50 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'rizk_CA':
                $data = array(
                    "backgroundImage" => "rizkcabg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkcabg.png",
                    "image" => "rizk_CA.png",
                    "header" => "Spin the Wheel & Win up to $500 and 50 free spins",
                    "price" => "500",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://sempected-wompted.com/fb45b26b-ec78-4575-a013-529e22511c22",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 50 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-Ri-C':
                $data = array(
                    "backgroundImage" => "rizkbg.png",
                    "buttonColor" => "#927d23",
                    "winnerImage" => "winnerrizkbg.png",
                    "image" => "CA-Ri-C.png",
                    "header" => "Spin the Wheel & win 100% bonus up to 500 CAD + 50 free spins",
                    "price" => "500",
                    "spin" => "50",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 50 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169660",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 50 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-In-Leo':
                $data = array(
                    "backgroundImage" => "creativebg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnercreativebg.png",
                    "image" => "CA-In-Leo.png",
                    "header" => "Spin the Wheel & win up to $1000 and 200 free spins",
                    "price" => "1000",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.leovegas.com/redirect.aspx?pid=3700954&bid=13158",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 200 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;   
            case 'CA-In-Bi':
                $data = array(
                    "backgroundImage" => "bingobg.png",
                    "buttonColor" => "#b4412a",
                    "winnerImage" => "winnerbingobg.png",
                    "image" => "CA-In-Bi.png",
                    "header" => "Spin the Wheel & win up to $500 and 200 free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "#",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );                
                break;   
            case 'CA-In-Pink':
                $data = array(
                    "backgroundImage" => "pinkcasinobg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnerpinkcasinobg.png",
                    "image" => "CA-In-Pink.png",
                    "header" => "Spin the Wheel & win up to $1000",
                    "price" => "1000",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.pinkcasino.co.uk/redirect.aspx?pid=3700957&bid=16777",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-C-Pink':
                $data = array(
                    "backgroundImage" => "pinkcasinobg.png",
                    "buttonColor" => "#d1a249",
                    "winnerImage" => "winnerpinkcasinobg.png",
                    "image" => "CA-C-Pink.png",
                    "header" => "Spin the Wheel & win up to $1000",
                    "price" => "1000",
                    "spin" => "",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.pinkcasino.co.uk/redirect.aspx?pid=3700957&bid=16777",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-C-SpinA':
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "CA-C-SpinA.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2856&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-K-SpinA':
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "CA-K-SpinA.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2857&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break; 
            case 'Spinaway_CA':
                $data = array(
                    "backgroundImage" => "spinaway.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinawaybg.png",
                    "image" => "Spinaway_CA.png",
                    "header" => "Spin the Wheel & Win $1500 + 100 Free spins!",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=2978&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;       
            case 'CA-C-Wheel':
                $data = array(
                    "backgroundImage" => "wheelbg.png",
                    "buttonColor" => "#195e22",
                    "winnerImage" => "winnerwheelbg.png",
                    "image" => "CA-C-Wheel.png",
                    "header" => "Spin the Wheel & win up to $300 and 100 free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $300 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=179970",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins",    
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break; 
            case 'CA-K-Wheel':
                $data = array(
                    "backgroundImage" => "wheelbg.png",
                    "buttonColor" => "#195e22",
                    "winnerImage" => "winnerwheelbg.png",
                    "image" => "CA-K-Wheel.png",
                    "header" => "Spin the Wheel & win up to $300 and 100 free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $300 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=179958",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins",    
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;               
            case 'FI-kalevala-KE':
                $data = array(
                    "backgroundImage" => "kalewalabg.png",
                    "buttonColor" => "#be1822",
                    "winnerImage" => "winnerkalewalabg.png",
                    "image" => "FI-kalevala-KE.png",
                    "header" => "Pyöräytä pyörää ja saat 325 euroa + 20 ilmaiskierrosta",
                    "price" => "325",
                    "spin" => "20",
                    "startAmount" => 100,
                    "currency" => "€",
                    "popupText1" => "SINULLA ON NYT ",
                    "popupText2" => "KIERROSTA,",
                    "popupButton" => "PYÖRITÄ",
                    "spinLeftLabel" => "KIERROSTA JÄLJELLÄ",
                    "spinHereLabel" => "PYÖRÄYTÄ TÄÄLLÄ",
                    "spinAgainLabel1" => "PYÖRÄYTÄ UUDELLEEN",
                    "spinAgainLabel2" => "YRITÄ UUDELLEEN!",
                    "spinAgainLabel3" => "PYÖRÄYTÄ UUDELLEEN",
                    "spinAgainLabel4" => "YRITÄ UUDELLEEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "JÄTTIPOTTI 325 € + 20 ILMAISKIERROSTA",
                    "createAccountButton" => "LUO ILMAINEN TILI",
                    "wonLabel" => "On onnenpäiväsi!",
                    "fullWinnerLabel" => "On onnenpäiväsi! <br> Nappaa itsellesi 325 € <br> plus 20 ilmaiskierrosta!",
                    "freeSpinLabel" => "ILMAISKIERROSTA",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "SALDO",
                    "pinImage" => "pin-gold.png",
                    "url" => "https://affmore.com/clk/57A63E70704111EBA7C37B183BDBA566",
                    "wheel" => array(
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "HÄVISIT 50 €",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "VOITAT 150 €",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "VOITIT 325 € + 20 ILMAISKIERROSTA",    
                            "price" => 325
                        ),
                        array(
                            "name" => "VOITAT 10 €",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "HÄVISIT 25 €",    
                            "price" => 25   
                        )
                    )
                );                  
                break;
            case 'FI-kalevala-KE-Unel':
                $data = array(
                    "backgroundImage" => "kalewalabg.png",
                    "buttonColor" => "#be1822",
                    "winnerImage" => "winnerkalewalabg.png",
                    "image" => "FI-kalevala-KE.png",
                    "header" => "Pyöräytä pyörää ja saat 325 euroa + 20 ilmaiskierrosta",
                    "price" => "325",
                    "spin" => "20",
                    "startAmount" => 100,
                    "currency" => "€",
                    "popupText1" => "SINULLA ON NYT ",
                    "popupText2" => "KIERROSTA,",
                    "popupButton" => "PYÖRITÄ",
                    "spinLeftLabel" => "KIERROSTA JÄLJELLÄ",
                    "spinHereLabel" => "PYÖRÄYTÄ TÄÄLLÄ",
                    "spinAgainLabel1" => "PYÖRÄYTÄ UUDELLEEN",
                    "spinAgainLabel2" => "YRITÄ UUDELLEEN!",
                    "spinAgainLabel3" => "PYÖRÄYTÄ UUDELLEEN",
                    "spinAgainLabel4" => "YRITÄ UUDELLEEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "JÄTTIPOTTI 325 € + 20 ILMAISKIERROSTA",
                    "createAccountButton" => "LUO ILMAINEN TILI",
                    "wonLabel" => "On onnenpäiväsi!",
                    "fullWinnerLabel" => "On onnenpäiväsi! <br> Nappaa itsellesi 325 € <br> plus 20 ilmaiskierrosta!",
                    "freeSpinLabel" => "ILMAISKIERROSTA",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "SALDO",
                    "pinImage" => "pin-gold.png",
                    "url" => "https://affmore.com/clk/1AA3A8E0775911EBAD26B99F515BD682",
                    "wheel" => array(
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "HÄVISIT 50 €",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "VOITAT 150 €",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MENETÄ KIERROS",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "VOITIT 325 € + 20 ILMAISKIERROSTA",    
                            "price" => 325
                        ),
                        array(
                            "name" => "VOITAT 10 €",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "HÄVISIT 25 €",    
                            "price" => 25   
                        )
                    )
                );                  
                break;    
            case 'CA-21-spinn':
                $data = array(
                    "backgroundImage" => "21bg.png",
                    "buttonColor" => "#b06cac",
                    "winnerImage" => "winner21bg.png",
                    "image" => "CA-21-spinn.png",
                    "header" => "Spin The Wheel and get $1000 and 1000 Free Spins",
                    "price" => "1000",
                    "spin" => "1000",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1000 + 1000 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "Congratulations,",
                    "fullWinnerLabel" => "Congratulations, Claim your $1000 and 1000 Free Spins now!",
                    "freeSpinLabel" => "Free Spins now!",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://afftrack21.21.partners/C.ashx?btag=a_11838b_457c_&affid=288&siteid=11838&adid=457&c=",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1000 + 1000 Free Spins",    
                            "price" => 1000
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-dunder':
                $data = array(
                    "backgroundImage" => "dunderbg.png",
                    "buttonColor" => "#b06cac",
                    "winnerImage" => "winnerdunderbg.png",
                    "image" => "CA-dunder.png",
                    "header" => "Spin The Wheel and get $600 and 200 Free Spins",
                    "price" => "600",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $600 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "Congratulations,",
                    "fullWinnerLabel" => "Congratulations, Claim your $600 and 200 Free Spins now!",
                    "freeSpinLabel" => "Free Spins now!",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=167038",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $600 + 200 Free Spins",    
                            "price" => 600
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;  
            case 'CA-casino-friday':
                $data = array(
                    "backgroundImage" => "casinofridaybg.png",
                    "buttonColor" => "#195e22",
                    "winnerImage" => "winnercasinofridaybg.png",
                    "image" => "CA-casino-friday.png",
                    "header" => "Spin the Wheel & Win $500 + 200 Free spins",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 200 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Congratulations, Claim your $500 and 200 Free Spins now!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://fwd.cx/VtPDd1umgCK4",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 200 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-casumo':
                $data = array(
                    "backgroundImage" => "casumobg.png",
                    "buttonColor" => "#195e22",
                    "winnerImage" => "winnercasumobg.png",
                    "image" => "CA-casumo.png",
                    "header" => "Spin the Wheel & Win $500 + 20 Free spins",
                    "price" => "500",
                    "spin" => "20",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $500 + 20 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Congratulations, Claim your $500 and 20 Free Spins now!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.casumoaffiliates.com/redirect.aspx?pid=1231220&bid=12180",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 20 Free Spins",    
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;      
            case 'NZ-casumo':
                $data = array(
                    "backgroundImage" => "casumobg.png",
                    "buttonColor" => "#195e22",
                    "winnerImage" => "winnercasumobg.png",
                    "image" => "NZ-casumo.png",
                    "header" => "Spin the Wheel & Win $1200 + 20 Free spins",
                    "price" => "1200",
                    "spin" => "20",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1200 + 20 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Congratulations, Claim your $1200 and 20 Free Spins now!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://ads.casumoaffiliates.com/redirect.aspx?pid=1231221&bid=12179",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1200 + 20 Free Spins",
                            "price" => 1200
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'New_CA_Duels':
                $data = array(
                    "backgroundImage" => "caduelsbg.png",
                    "buttonColor" => "#DC953C",
                    "winnerImage" => "winnercaduelsbg.png",
                    "winnerBG" => "#E54A5D",
                    "image" => "New_CA_Duels.png",
                    "headerlogo" => "caduelslogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spin the Wheel & Win CA$1600 <br/> + 200 Free spins",
                    "price" => "1600",
                    "spin" => "200",
                    "startAmount" => 15,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS!",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN AGAIN",
                    "spinAgainLabel2" => "GIVE IT ANOTHER TRY",
                    "spinAgainLabel3" => "SPIN AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "pricehighlight" => "Get your CA$1600 + 200 Free Spins now",
                    "claimNowButton" => "Continue",
                    "createAccountButton" => "",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "CONGRATULATIONS",
                    "fullWinnerSublabel" => "You are number 8 out of 36 players today which won.",
                    "timerLabel" => "This bonus expires in",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://nvd.suprnation.com/redirect.aspx?pid=26070&bid=2405",                    
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $4",    
                            "price" => 4    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1600 + 200 Free Spins!",
                            "price" => 1600
                        ),
                        array(
                            "name" => "YOU WON $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $6",    
                            "price" => 6   
                        )
                    )
                );               
                break;
            case 'wheel_DE_Wasamb':
                $data = array(
                    "backgroundImage" => "wasambdebg.png",
                    "buttonColor" => "#67bb1f",
                    "bgBalancePopup" => "#67bb1f",
                    "priceFontSize" => "26px",
                    "winnerBG" => "#87db3f",
                    "image" => "wheel_DE_Wasamb.png",
                    "headerlogo" => "wasambdelogo.png",
                    "headerlogoSize" => "200px",
                    "header" => "Drehen Sie das Rad und gewinnen Sie bis zu €500 <br/> + 200 Freispiele",
                    "price" => "500",
                    "spin" => "200",
                    "startAmount" => 15,
                    "currency" => "€",
                    "popupText1" => "SIE HABEN JETZT ",
                    "popupText2" => "FREISPIELE!",
                    "popupButton" => "LOS!",
                    "spinLeftLabel" => "Übrige Freispiele",
                    "spinHereLabel" => "HIER DREHEN! ",
                    "spinAgainLabel1" => "NOCH EINMAL DREHEN",
                    "spinAgainLabel2" => "VERSUCHEN SIE ES NOCH EINMAL",
                    "spinAgainLabel3" => "NOCH EINMAL DREHEN",
                    "spinAgainLabel4" => "RNEUT VERSUCHEN",
                    "isPrefix" => 1,                    
                    "claimNowButton" => "Continue",
                    "createAccountButton" => "",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "WOW...SIE WAREN UNTER DEN GEWINNERN! <br/><br/> AKTIVIEREN SIE IHRE €500 ",
                    "fullWinnerSublabel" => "+ 200 FREISPIEL",
                    "timerLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "spinIconColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Guthaben",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.wazamba.com/redirect.aspx?pid=1766215&bid=5143&redirectURL=",                    
                    "wheel" => array(
                        array(
                            "name" => "EINE RUNDE VERLIEREN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "SIE HABEN VERLOREN €4",    
                            "price" => 4    
                        ),
                        array(
                            "name" => "SIE HABEN GEWONNEN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "EINE RUNDE VERLIEREN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "EINE RUNDE VERLIEREN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot € 500 + 200 Freispiele!",
                            "price" => 500
                        ),
                        array(
                            "name" => "SIE HABEN GEWONNEN €10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "SIE HABEN VERLOREN €6",    
                            "price" => 6   
                        )
                    )
                );               
                break;
            case 'CA-C-Super':
                $data = array(
                    "backgroundImage" => "cacsuperbg.png",
                    "buttonColor" => "#ad8547",
                    "winnerImage" => "winnercacsuperbg.png",
                    "winnerBG" => "#f0c984",
                    "image" => "CA_C_Super.png",
                    "headerlogo" => "cacsuperlogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spin the Wheel & Win CA$500 <br/> + 100 Free spins",
                    "price" => "500",
                    "spin" => "100",
                    "startAmount" => 15,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS!",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN AGAIN",
                    "spinAgainLabel2" => "GIVE IT ANOTHER TRY",
                    "spinAgainLabel3" => "SPIN AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "pricehighlight" => "Get your CA$500 + 100 Free Spins now",
                    "claimNowButton" => "Continue",
                    "createAccountButton" => "",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "CONGRATULATIONS",
                    "fullWinnerSublabel" => "You are number 8 out of 36 players today which won.",
                    "timerLabel" => "This bonus expires in",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=182424",                    
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $4",    
                            "price" => 4    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $500 + 100 Free Spins!",
                            "price" => 500
                        ),
                        array(
                            "name" => "YOU WON $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $6",    
                            "price" => 6   
                        )
                    )
                );               
                break;
            case 'CA-C-Pocket':
                $data = array(
                    "backgroundImage" => "cacpocketbg.png",
                    "buttonColor" => "#e9626f",
                    "winnerImage" => "winnercacpocketbg.png",
                    "winnerBG" => "#ffbec1",
                    "image" => "CA-C-Pocket.png",
                    "headerlogo" => "cacpocketlogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spin the Wheel & Win CA$300 <br/> + 100 Free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS!",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN AGAIN",
                    "spinAgainLabel2" => "GIVE IT ANOTHER TRY",
                    "spinAgainLabel3" => "SPIN AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "pricehighlight" => "Get your CA$300 + 100 Free Spins now",
                    "claimNowButton" => "Continue",
                    "createAccountButton" => "",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "CONGRATULATIONS",
                    "fullWinnerSublabel" => "You are number 8 out of 36 players today which won.",
                    "timerLabel" => "This bonus expires in",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/6/",                    
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins!",
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WON $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-K-Pocket':
                $data = array(
                    "backgroundImage" => "cakpocketbg.png",
                    "buttonColor" => "#694935",
                    "winnerImage" => "winnercakpocketbg.png",
                    "winnerBG" => "#bfbfbf",
                    "image" => "CA-K-Pocket.png",
                    "headerlogo" => "cakpocketlogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spin the Wheel & Win CA$300 <br/> + 100 Free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS!",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN AGAIN",
                    "spinAgainLabel2" => "GIVE IT ANOTHER TRY",
                    "spinAgainLabel3" => "SPIN AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "pricehighlight" => "Get your CA$300 + 100 Free Spins now",
                    "claimNowButton" => "Continue",
                    "createAccountButton" => "",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "CONGRATULATIONS",
                    "fullWinnerSublabel" => "You are number 8 out of 36 players today which won.",
                    "timerLabel" => "This bonus expires in",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/9/",                    
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins!",
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WON $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'NO-C-Pocket':    
                $data = array(
                    "backgroundImage" => "nocpocketbg.png",
                    "buttonColor" => "#f427d5",                    
                    "winnerImage" => "winnernocpocketbg.png",
                    "image" => "NO-C-Pocket.png",
                    "headerlogo" => "nocpocketlogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spinn nå for å motta 5,000 kr gratis og 100 gratisspinn",
                    "price" => "5000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/8/",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 100 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-K-Pocket':    
                $data = array(
                    "backgroundImage" => "nokpocketbg.png",
                    "buttonColor" => "#5c795e",                    
                    "winnerImage" => "winnernokpocketbg.png",
                    "image" => "NO-K-Pocket.png",
                    "headerlogo" => "nokpocketlogo.png",
                    "headerlogoSize" => "140px",
                    "header" => "Spinn nå for å motta 5,000 kr gratis og 100 gratisspinn",
                    "price" => "5000",
                    "spin" => "100",
                    "startAmount" => 1000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/11/",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 100 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NZ-C-Pocket':
                $data = array(
                    "backgroundImage" => "nzcpocketbg.png",
                    "buttonColor" => "#97382c",
                    "winnerImage" => "winnernzcpocketbg.png",
                    "image" => "NZ-C-Pocket.png",
                    "header" => "Spin the Wheel & Win $300 + 100 Free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $300 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Congratulations, Claim your $300 and 100 Free Spins now!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/7/",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins",
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'NZ-K-Pocket':
                $data = array(
                    "backgroundImage" => "nzkpocketbg.png",
                    "buttonColor" => "#a1070a",
                    "winnerImage" => "winnernzkpocketbg.png",
                    "image" => "NZ-K-Pocket.png",
                    "header" => "Spin the Wheel & Win $300 + 100 Free spins",
                    "price" => "300",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $300 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Congratulations, Claim your $300 and 100 Free Spins now!",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://record.waveaffiliates.com/_Kx77Ifg-xAGVAv0U_Fv2nWNd7ZgqdRLk/10/",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $300 + 100 Free Spins",
                            "price" => 300
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'AT-S-SpinA':
                $data = array(
                    "backgroundImage" => "atspinabg.jpg",
                    "buttonColor" => "#33d1fe",
                    "winnerImage" => "winneratspina.png",
                    "image" => "AT-S-SpinA.png",
                    "header" => "Drehen und Gewinnen 1000 € + 100 Gratisrunden",
                    "price" => "1000",
                    "spin" => "100",
                    "startAmount" => 200,
                    "currency" => "€",
                    "popupText1" => "Drehen und Gewinnen?",
                    "popupText2" => "Gratis-Runden",
                    "popupButton" => "Los geht's!",
                    "spinLeftLabel" => "zurückdrehen",
                    "spinHereLabel" => "Hier drehen!",
                    "spinAgainLabel1" => "Neue Runde",
                    "spinAgainLabel2" => "Bitte versuchen Sie es erneut",
                    "spinAgainLabel3" => "Neue Runde",
                    "spinAgainLabel4" => "Neue Runde",
                    "isPrefix" => 1,
                    "claimNowButton" => "1000€ + 100 Gratis-Runden",
                    "createAccountButton" => "Erstelle einen kostenlosen konto",
                    "wonLabel" => "You Won",
                    "fullWinnerLabel" => "Glückwunsch! Sichern Sie sich bis zu 1000 € + 100 Gratisrunden",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Guthaben",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4701&lpid=6&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "Verlorene Runde",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "Sie haben 400€ verloren",    
                            "price" => 400    
                        ),
                        array(
                            "name" => "Sie haben 150€ gewonnen",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "Verlorene Runde",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Verlorene Runde",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "1000€ + 100 Gratis-Runden",
                            "price" => 1000
                        ),
                        array(
                            "name" => "Sie haben 400€ gewonnen",    
                            "price" => 400    
                        ),
                        array(
                            "name" => "Sie haben 100€ verloren",    
                            "price" => 100   
                        )
                    )
                );               
                break;
                case 'CA-Lucky-RE':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-RE.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8752&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Lucky-WEFB':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-WEFB.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8753&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Lucky-S':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-S.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8754&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Lucky-FB':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-FB.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8755&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Lucky-SC':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-SC.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8756&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Lucky-WESC':
                    $data = array(
                        "backgroundImage" => "bluebg.png",
                        "buttonColor" => "#007687",
                        "winnerImage" => "winnerbluebg.png",
                        "image" => "CA-Lucky-WESC.png",
                        "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                        "price" => "1500",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8757&bid=1476",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $1500 + 100 Free Spins",    
                                "price" => 1500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-Kalevala-E':
                    $data = array(
                        "backgroundImage" => "FI-Kalevala-EBg.png",
                        "buttonColor" => "#742290",
                        "winnerImage" => "winner-kalevalae.png",
                        "image" => "FI-Kalevala-E.png",
                        "header" => "Spin the Wheel & win up to 325€ + 20 FreeSpins",
                        "price" => "325",
                        "spin" => "20",
                        "startAmount" => 100,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 325€ + 20 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://affmore.com/clk/FBEA6280A05C11ECB85B8DFE60FF4F9E",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 325€ + 20 FreeSpins",    
                                "price" => 325
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-LeoVegas-E':
                    $data = array(
                        "backgroundImage" => "FI-LeoVegas-EBg.png",
                        "buttonColor" => "#e9626f",
                        "winnerImage" => "winner-leovegase.png",
                        "image" => "FI-LeoVegas-E.png",
                        "header" => "Spin the Wheel & win up to 400€",
                        "price" => "400",
                        "startAmount" => 200,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 400€",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#333333",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ntrfr.leovegas.com/redirect.aspx?pid=3734750&bid=17441",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 400€",    
                                "price" => 400
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-NySpins-E':
                    $data = array(
                        "backgroundImage" => "FI-NySpins-EBg.jpg",
                        "buttonColor" => "#f7d53b",
                        "winnerImage" => "winner-nyspinse.png",
                        "image" => "FI-NySpins-E.png",
                        "header" => "Spin the Wheel & win up to 50€",
                        "price" => "50",
                        "startAmount" => 200,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 50€",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://nvd.suprnation.com/redirect.aspx?pid=27597&bid=2323",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 50€",    
                                "price" => 50
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-Wheels-E':
                    $data = array(
                        "backgroundImage" => "FI-Wheels-EBg.jpg",
                        "buttonColor" => "#467433",
                        "winnerImage" => "winner-wheelse.png",
                        "image" => "FI-Wheels-E.png",
                        "header" => "Spin the Wheel & win up to 300€ + 200 FreeSpins",
                        "price" => "300",
                        "spin" => "200",
                        "startAmount" => 100,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 300€ + 200 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://keyaff.com/l/?id=179452",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "300€ + 200 FreeSpins",    
                                "price" => 300
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-Wildz-E':
                    $data = array(
                        "backgroundImage" => "FI-Wildz-EBg.jpg",
                        "buttonColor" => "#9c6929",
                        "winnerImage" => "winner-wildz.png",
                        "image" => "FI-Wildz-E.png",
                        "header" => "Spin the Wheel & win up to 500€ + 200 FreeSpins",
                        "price" => "500",
                        "spin" => "200",
                        "startAmount" => 200,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 500€ + 200 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#333333",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://keyaff.com/l/?id=110862",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "500€ + 200 FreeSpins",    
                                "price" => 500
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-Kalevala-W':
                    $data = array(
                        "backgroundImage" => "FI-Kalevala-WBg.png",
                        "buttonColor" => "#f72202",
                        "winnerImage" => "winner-kalevalaw.png",
                        "image" => "FI-Kalevala-W.png",
                        "header" => "Spin the Wheel & win up to 325€ + 20 FreeSpins",
                        "price" => "325",
                        "spin" => "20",
                        "startAmount" => 100,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 325€ + 20 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#333333",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://affmore.com/clk/044339C0A05D11ECA973CFF69966818D",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 325€ + 20 FreeSpins",    
                                "price" => 325
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-LeoVegas-W':
                    $data = array(
                        "backgroundImage" => "FI-LeoVegas-WBg.png",
                        "buttonColor" => "#3d9e9d",
                        "winnerImage" => "winner-leovegasw.png",
                        "image" => "FI-LeoVegas-W.png",
                        "header" => "Spin the Wheel & win up to 400€",
                        "price" => "400",
                        "startAmount" => 200,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 400€",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ntrfr.leovegas.com/redirect.aspx?pid=3734751&bid=17441",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 400€",    
                                "price" => 400
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'FI-NySpins-W':
                    $data = array(
                        "backgroundImage" => "FI-NySpins-WBg.png",
                        "buttonColor" => "#027f04",
                        "winnerImage" => "winner-nyspinsw.png",
                        "image" => "FI-NySpins-W.png",
                        "header" => "Spin the Wheel & win up to 50€",
                        "price" => "50",
                        "startAmount" => 200,
                        "currency" => "€",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot 50€",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://nvd.suprnation.com/redirect.aspx?pid=27598&bid=2323",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST 50€",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN 150€",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot 50€",    
                                "price" => 50
                            ),
                            array(
                                "name" => "YOU WIN 10€",    
                                "price" => 10   
                            ),
                            array(
                                "name" => "YOU LOST 25€",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Spinyoo-E':
                    $data = array(
                        "backgroundImage" => "NZ-Spinyoo-EBg.jpg",
                        "buttonColor" => "#fa6d00",
                        "winnerImage" => "winner-spinyooe.png",
                        "image" => "NZ-Spinyoo-E.png",
                        "header" => "Spin the Wheel & win up to $200 + 100 FreeSpins",
                        "price" => "200",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $200 + 100 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91808&bid=1622",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $200 + 100 FreeSpins",    
                                "price" => 200
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-allin-E':
                    $data = array(
                        "backgroundImage" => "NZ-allin-EBg.jpg",
                        "buttonColor" => "#006271",
                        "winnerImage" => "winner-alline.png",
                        "image" => "NZ-allin-E.png",
                        "header" => "Spin the Wheel & win up to $100 + 100 Free Spins",
                        "price" => "100",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $100 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://marketing.allincasino.com/C.ashx?btag=a_708b_10c_&affid=224&siteid=708&adid=10&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $100 + 100 Free Spins",    
                                "price" => 100
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Casimba-E':
                    $data = array(
                        "backgroundImage" => "NZ-Casimba-EBg.jpg",
                        "buttonColor" => "#b45ce4",
                        "winnerImage" => "winner-casimbae.png",
                        "image" => "NZ-Casimba-E.png",
                        "header" => "Spin the Wheel & win up to $5000 + 50 Free Spins",
                        "price" => "5000",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $5000 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22770b_187c_&affid=2917&siteid=22770&adid=187&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $5000 + 50 Free Spins",    
                                "price" => 5000
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Dreamvegas-E':
                    $data = array(
                        "backgroundImage" => "NZ-Dreamvegas-EBg.jpg",
                        "buttonColor" => "#eb5f5f",
                        "winnerImage" => "winner-dreamvegase.png",
                        "image" => "NZ-Dreamvegas-E.png",
                        "header" => "Spin the Wheel & win up to $2500 + 50 Free Spins",
                        "price" => "2500",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $2500 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22776b_228c_&affid=2917&siteid=22776&adid=228&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $2500 + 50 Free Spins",    
                                "price" => 2500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Spinyoo-W':
                    $data = array(
                        "backgroundImage" => "NZ-Spinyoo-WBg.jpg",
                        "buttonColor" => "#104a56",
                        "winnerImage" => "winner-spinyoow.png",
                        "image" => "NZ-Spinyoo-W.png",
                        "header" => "Spin the Wheel & win up to $200 + 100 FreeSpins",
                        "price" => "200",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $200 + 100 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91809&bid=1622",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $200 + 100 FreeSpins",    
                                "price" => 200
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-allin-W':
                    $data = array(
                        "backgroundImage" => "NZ-allin-WBg.jpg",
                        "buttonColor" => "#2c156f",
                        "winnerImage" => "winner-allinw.png",
                        "image" => "NZ-allin-W.png",
                        "header" => "Spin the Wheel & win up to $100 + 100 Free Spins",
                        "price" => "100",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $100 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://marketing.allincasino.com/C.ashx?btag=a_707b_10c_&affid=224&siteid=707&adid=10&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $100 + 100 Free Spins",    
                                "price" => 100
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Casimba-W':
                    $data = array(
                        "backgroundImage" => "NZ-Casimba-WBg.jpg",
                        "buttonColor" => "#63b9fc",
                        "winnerImage" => "winner-casimbaw.png",
                        "image" => "NZ-Casimba-W.png",
                        "header" => "Spin the Wheel & win up to $5000 + 50 Free Spins",
                        "price" => "5000",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $5000 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#333333",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22771b_187c_&affid=2917&siteid=22771&adid=187&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $5000 + 50 Free Spins",    
                                "price" => 5000
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NZ-Dreamvegas-W':
                    $data = array(
                        "backgroundImage" => "NZ-Dreamvegas-WBg.jpg",
                        "buttonColor" => "#840000",
                        "winnerImage" => "winner-dreamvegasw.png",
                        "image" => "NZ-Dreamvegas-W.png",
                        "header" => "Spin the Wheel & win up to $2500 + 50 Free Spins",
                        "price" => "2500",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $2500 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22777b_228c_&affid=2917&siteid=22777&adid=228&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $2500 + 50 Free Spins",    
                                "price" => 2500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Spinyoo-E':
                    $data = array(
                        "backgroundImage" => "CA-Spinyoo-EBg.jpg",
                        "buttonColor" => "#ed3e7f",
                        "winnerImage" => "winner-caspinyooe.png",
                        "image" => "CA-Spinyoo-E.png",
                        "header" => "Spin the Wheel & win up to $200 + 100 FreeSpins",
                        "price" => "200",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $200 + 100 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91811&bid=1622",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $200 + 100 FreeSpins",    
                                "price" => 200
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-allin-E':
                    $data = array(
                        "backgroundImage" => "CA-allin-EBg.jpg",
                        "buttonColor" => "#006271",
                        "winnerImage" => "winner-caalline.png",
                        "image" => "CA-allin-E.png",
                        "header" => "Spin the Wheel & win up to $100 + 100 Free Spins",
                        "price" => "100",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $100 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://marketing.allincasino.com/C.ashx?btag=a_709b_5c_&affid=224&siteid=709&adid=5&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $100 + 100 Free Spins",    
                                "price" => 100
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Casimba-E':
                    $data = array(
                        "backgroundImage" => "CA-Casimba-EBg.jpg",
                        "buttonColor" => "#840000",
                        "winnerImage" => "winner-ca-casimbae.png",
                        "image" => "CA-Casimba-E.png",
                        "header" => "Spin the Wheel & win up to $5000 + 50 Free Spins",
                        "price" => "5000",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $5000 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22772b_187c_&affid=2917&siteid=22772&adid=187&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $5000 + 50 Free Spins",    
                                "price" => 5000
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Dreamvegas-E':
                    $data = array(
                        "backgroundImage" => "CA-Dreamvegas-EBg.jpg",
                        "buttonColor" => "#4720b4",
                        "winnerImage" => "winner-cadreamvegase.png",
                        "image" => "CA-Dreamvegas-E.png",
                        "header" => "Spin the Wheel & win up to $2500 + 50 Free Spins",
                        "price" => "2500",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $2500 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22774b_228c_&affid=2917&siteid=22774&adid=228&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $2500 + 50 Free Spins",    
                                "price" => 2500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Spinyoo-W':
                    $data = array(
                        "backgroundImage" => "CA-Spinyoo-WBg.jpg",
                        "buttonColor" => "#ffdc2b",
                        "winnerImage" => "winner-caspinyoow.png",
                        "image" => "CA-Spinyoo-W.png",
                        "header" => "Spin the Wheel & win up to $200 + 100 FreeSpins",
                        "price" => "200",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $200 + 100 FreeSpins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91812&bid=1622",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $200 + 100 FreeSpins",    
                                "price" => 200
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-allin-W':
                    $data = array(
                        "backgroundImage" => "CA-allin-WBg.jpg",
                        "buttonColor" => "#ffce18",
                        "winnerImage" => "winner-caallinw.png",
                        "image" => "CA-allin-W.png",
                        "header" => "Spin the Wheel & win up to $100 + 100 Free Spins",
                        "price" => "100",
                        "spin" => "100",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $100 + 100 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://marketing.allincasino.com/C.ashx?btag=a_710b_5c_&affid=224&siteid=710&adid=5&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $100 + 100 Free Spins",    
                                "price" => 100
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Casimba-W':
                    $data = array(
                        "backgroundImage" => "CA-Casimba-WBg.jpg",
                        "buttonColor" => "#824e72",
                        "winnerImage" => "winner-cacasimbaw.png",
                        "image" => "CA-Casimba-W.png",
                        "header" => "Spin the Wheel & win up to $5000 + 50 Free Spins",
                        "price" => "5000",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $5000 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22773b_187c_&affid=2917&siteid=22773&adid=187&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $5000 + 50 Free Spins",    
                                "price" => 5000
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'CA-Dreamvegas-W':
                    $data = array(
                        "backgroundImage" => "CA-Dreamvegas-WBg.jpg",
                        "buttonColor" => "#840000",
                        "winnerImage" => "winner-cadreamvegasw.png",
                        "image" => "CA-Dreamvegas-W.png",
                        "header" => "Spin the Wheel & win up to $2500 + 50 Free Spins",
                        "price" => "2500",
                        "spin" => "50",
                        "startAmount" => 100,
                        "currency" => "$",
                        "popupText1" => "YOU NOW HAVE ",
                        "popupText2" => "FREE SPINS",
                        "popupButton" => "GO !",
                        "spinLeftLabel" => "Spins Left",
                        "spinHereLabel" => "SPIN HERE!",
                        "spinAgainLabel1" => "SPIN IT AGAIN",
                        "spinAgainLabel2" => "HAVE ANOTHER GO",
                        "spinAgainLabel3" => "SPIN IT AGAIN",
                        "spinAgainLabel4" => "TRY AGAIN",
                        "isPrefix" => 1,
                        "claimNowButton" => "Jackpot $2500 + 50 Free Spins",
                        "createAccountButton" => "Create A Free Account",
                        "wonLabel" => "You Won",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "disclaimer" => "This offer is not available for players residing in Ontario",
                        "url" => "https://ivyaffsolutions.com/C.ashx?btag=a_22775b_228c_&affid=2917&siteid=22775&adid=228&c=",
                        "wheel" => array(
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "YOU LOST $50",    
                                "price" => 50    
                            ),
                            array(
                                "name" => "YOU WIN $150",    
                                "price" => 150    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "LOSE A TURN",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "Jackpot $2500 + 50 Free Spins",    
                                "price" => 2500
                            ),
                            array(
                                "name" => "YOU WIN $10",    
                                "price" => 10    
                            ),
                            array(
                                "name" => "YOU LOST $25",    
                                "price" => 25   
                            )
                        )
                    );               
                    break;
                case 'NO-Spinyoo-E':    
                    $data = array(
                        "backgroundImage" => "NO-Spinyoo-Ebg.jpg",
                        "buttonColor" => "#1d49de",                    
                        "winnerImage" => "winner-nospinyoo.png",
                        "image" => "NO-Spinyoo-E.png",
                        "header" => "Spinn nå for å motta 10000 kr gratis og 100 gratisspinn!",
                        "price" => "10000",
                        "spin" => "100",
                        "startAmount" => 5000,
                        "currency" => "Kr",
                        "popupText1" => "Spinn & Vinn? ",
                        "popupText2" => "gratisspinn",
                        "popupButton" => "La oss begynne !",
                        "spinLeftLabel" => "Spinn som gjenstår",
                        "spinHereLabel" => "SPINN HER!",
                        "spinAgainLabel1" => "SPINN IGJEN",
                        "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                        "spinAgainLabel3" => "SPINN IGJEN",
                        "spinAgainLabel4" => "PRØV IGJEN",
                        "isPrefix" => 0,
                        "claimNowButton" => "Få din velkomstbonus nå",
                        "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                        "wonLabel" => "Gratulerer,",
                        "fullWinnerLabel" => "Gratulerer, 10000 kr gratis og 100 gratisspinn!",
                        "freeSpinLabel" => "gratisspinn!",
                        "fontColor" => "#ffffff",
                        "isBlockLeft" => false,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91813&bid=1622",
                        "wheel" => array(
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "DU TAPTE 3000 kr",    
                                "price" => 3000    
                            ),
                            array(
                                "name" => "DU VANT 500 kr",    
                                "price" => 500   
                            ),
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                                "price" => 10000
                            ),
                            array(
                                "name" => "DU VANT 3000 kr",    
                                "price" => 3000   
                            ),
                            array(
                                "name" => "DU TAPTE 900 kr",    
                                "price" => 900   
                            )
                        )
                    );                
                    break; 
                case 'NO-PlayZ-E':    
                    $data = array(
                        "backgroundImage" => "NO-PlayZ-Ebg.jpg",
                        "buttonColor" => "#006271",
                        "winnerImage" => "winner-noplayze.png",
                        "image" => "NO-PlayZ-E.png",
                        "header" => "Vinn til 15000 kr + 150 gratisspinn i velkomstbonuss",
                        "price" => "15000",
                        "spin" => "150",
                        "startAmount" => 5000,
                        "currency" => "Kr",
                        "popupText1" => "Spinn & Vinn? ",
                        "popupText2" => "gratisspinn",
                        "popupButton" => "La oss begynne !",
                        "spinLeftLabel" => "Spinn som gjenstår",
                        "spinHereLabel" => "SPINN HER!",
                        "spinAgainLabel1" => "SPINN IGJEN",
                        "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                        "spinAgainLabel3" => "SPINN IGJEN",
                        "spinAgainLabel4" => "PRØV IGJEN",
                        "isPrefix" => 0,
                        "claimNowButton" => "Få din velkomstbonus nå",
                        "createAccountButton" => "Få 15000 kr + 150 gratisspinn i velkomstbonus",
                        "wonLabel" => "",
                        "freeSpinLabel" => "Free Spins",
                        "fontColor" => "#000000",
                        "isBlockLeft" => true,
                        "priceTagLabel" => "",
                        "balanceTitle" => "Balance",
                        "pinImage" => "pin-dark.png",
                        "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91815&bid=1530",
                        "wheel" => array(
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0  
                            ),
                            array(
                                "name" => "DU TAPTE 3000 kr",    
                                "price" => 3000    
                            ),
                            array(
                                "name" => "DU VANT 500 kr",    
                                "price" => 500   
                            ),
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "MIST EN RUNDE",    
                                "price" => 0    
                            ),
                            array(
                                "name" => "BONUS: 15000 kr + 150 GRATISSPINN",    
                                "price" => 15000
                            ),
                            array(
                                "name" => "DU VANT 3000 kr",    
                                "price" => 3000   
                            ),
                            array(
                                "name" => "DU TAPTE 900 kr",    
                                "price" => 900   
                            )
                        )
                    );                
                    break;
            case 'NO-Wildz-E':    
                $data = array(
                    "backgroundImage" => "NO-Wildz-Ebg.jpg",
                    "buttonColor" => "#b37334",                    
                    "winnerImage" => "winner-nowildze.png",
                    "image" => "NO-Wildz-E.png",
                    "header" => "Vinn til 5000 kr + 200 gratisspinn i velkomstbonuss",
                    "price" => "5000",
                    "spin" => "200",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 5000 kr + 200 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#000000",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=169620",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 5000 kr + 200 GRATISSPINN",    
                            "price" => 5000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-Wheels-E':    
                $data = array(
                    "backgroundImage" => "NO-Wheels-Ebg.png",
                    "buttonColor" => "#6e1873",                    
                    "winnerImage" => "winner-nowheelse.png",
                    "image" => "NO-Wheels-E.png",
                    "header" => "Spinn nå for å motta 3000 kr gratis og 100 gratisspinn",
                    "price" => "3000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 3000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://keyaff.com/l/?id=179982",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 3000 kr + 100 GRATISSPINN",    
                            "price" => 3000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-LuckyDays-E':    
                $data = array(
                    "backgroundImage" => "NO-LuckyDays-Ebg.jpg",
                    "buttonColor" => "#cb86c1",                    
                    "winnerImage" => "winner-noluckydayse.png",
                    "image" => "NO-LuckyDays-E.png",
                    "header" => "Spinn nå for å motta 10000 kr gratis og 100 gratisspinn!",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer,",
                    "fullWinnerLabel" => "Gratulerer, 10000 kr gratis og 100 gratisspinn!",
                    "freeSpinLabel" => "gratisspinn!",
                    "fontColor" => "#333333",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8877&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break; 
            case 'NO-Spinyoo-W':    
                $data = array(
                    "backgroundImage" => "NO-Spinyoo-Wbg.jpg",
                    "buttonColor" => "#44624c",                    
                    "winnerImage" => "winner-nospinyoow.png",
                    "image" => "NO-Spinyoo-W.png",
                    "header" => "Spinn nå for å motta 10000 kr gratis og 100 gratisspinn!",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer,",
                    "fullWinnerLabel" => "Gratulerer, 10000 kr gratis og 100 gratisspinn!",
                    "freeSpinLabel" => "gratisspinn!",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91814&bid=1622",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-PlayZ-W':    
                $data = array(
                    "backgroundImage" => "NO-PlayZ-Wbg.jpg",
                    "buttonColor" => "#3d4f60",
                    "winnerImage" => "winner-noplayzw.png",
                    "image" => "NO-PlayZ-W.png",
                    "header" => "Vinn til 15000 kr + 150 gratisspinn i velkomstbonuss",
                    "price" => "15000",
                    "spin" => "150",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 15000 kr + 150 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => true,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://Media.Zeepartners.com/redirect.aspx?pid=91816&bid=1530",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 15000 kr + 150 GRATISSPINN",    
                            "price" => 15000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-LuckyDays-W':    
                $data = array(
                    "backgroundImage" => "NO-LuckyDays-Wbg.jpg",
                    "buttonColor" => "#ca3d77",                    
                    "winnerImage" => "winner-noluckydaysw.png",
                    "image" => "NO-LuckyDays-W.png",
                    "header" => "Spinn nå for å motta 10000 kr gratis og 100 gratisspinn!",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "Gratulerer,",
                    "fullWinnerLabel" => "Gratulerer, 10000 kr gratis og 100 gratisspinn!",
                    "freeSpinLabel" => "gratisspinn!",
                    "fontColor" => "#333333",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.luckydaysaffiliates.com/redirect.aspx?pid=8878&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-W':    
                $data = array(
                    "backgroundImage" => "spinaway-now.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinaway-nowbg.png",
                    "image" => "NO-W.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4943&bid=1524",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-S':    
                $data = array(
                    "backgroundImage" => "spinaway-nos.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinaway-nosbg.png",
                    "image" => "NO-S.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4945&bid=1524",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'NO-E':    
                $data = array(
                    "backgroundImage" => "spinaway-noe.png",
                    "buttonColor" => "#b06cac",                    
                    "winnerImage" => "winnerspinaway-noebg.png",
                    "image" => "NO-E.png",
                    "header" => "Spinn nå for å motta 10,000 kr gratis og 100 gratisspinn",
                    "price" => "10000",
                    "spin" => "100",
                    "startAmount" => 5000,
                    "currency" => "Kr",
                    "popupText1" => "Spinn & Vinn? ",
                    "popupText2" => "gratisspinn",
                    "popupButton" => "La oss begynne !",
                    "spinLeftLabel" => "Spinn som gjenstår",
                    "spinHereLabel" => "SPINN HER!",
                    "spinAgainLabel1" => "SPINN IGJEN",
                    "spinAgainLabel2" => "GJØR ET NYTT FORSØK",
                    "spinAgainLabel3" => "SPINN IGJEN",
                    "spinAgainLabel4" => "PRØV IGJEN",
                    "isPrefix" => 0,
                    "claimNowButton" => "Få din velkomstbonus nå",
                    "createAccountButton" => "Få 10000 kr + 100 gratisspinn i velkomstbonus",
                    "wonLabel" => "",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4944&bid=1524",
                    "wheel" => array(
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "DU TAPTE 3000 kr",    
                            "price" => 3000    
                        ),
                        array(
                            "name" => "DU VANT 500 kr",    
                            "price" => 500   
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "MIST EN RUNDE",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "BONUS: 10000 kr + 100 GRATISSPINN",    
                            "price" => 10000
                        ),
                        array(
                            "name" => "DU VANT 3000 kr",    
                            "price" => 3000   
                        ),
                        array(
                            "name" => "DU TAPTE 900 kr",    
                            "price" => 900   
                        )
                    )
                );                
                break;
            case 'CA-W':
                $data = array(
                    "backgroundImage" => "spinaway-caw.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinaway-cawbg.png",
                    "image" => "CA-W.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4946&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-S':
                $data = array(
                    "backgroundImage" => "spinaway-cas.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinaway-casbg.png",
                    "image" => "CA-S.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4947&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            case 'CA-E':
                $data = array(
                    "backgroundImage" => "spinaway-cae.png",
                    "buttonColor" => "#007687",
                    "winnerImage" => "winnerspinaway-caebg.png",
                    "image" => "CA-E.png",
                    "header" => "Spin the Wheel & win up to $1500 and 100 free spins",
                    "price" => "1500",
                    "spin" => "100",
                    "startAmount" => 100,
                    "currency" => "$",
                    "popupText1" => "YOU NOW HAVE ",
                    "popupText2" => "FREE SPINS",
                    "popupButton" => "GO !",
                    "spinLeftLabel" => "Spins Left",
                    "spinHereLabel" => "SPIN HERE!",
                    "spinAgainLabel1" => "SPIN IT AGAIN",
                    "spinAgainLabel2" => "HAVE ANOTHER GO",
                    "spinAgainLabel3" => "SPIN IT AGAIN",
                    "spinAgainLabel4" => "TRY AGAIN",
                    "isPrefix" => 1,
                    "claimNowButton" => "Jackpot $1500 + 100 Free Spins",
                    "createAccountButton" => "Create A Free Account",
                    "wonLabel" => "You Won",
                    "freeSpinLabel" => "Free Spins",
                    "fontColor" => "#ffffff",
                    "isBlockLeft" => false,
                    "priceTagLabel" => "",
                    "balanceTitle" => "Balance",
                    "pinImage" => "pin-dark.png",
                    "url" => "https://media.spinawaypartners.com/redirect.aspx?pid=4948&bid=1476",
                    "wheel" => array(
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0  
                        ),
                        array(
                            "name" => "YOU LOST $50",    
                            "price" => 50    
                        ),
                        array(
                            "name" => "YOU WIN $150",    
                            "price" => 150    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "LOSE A TURN",    
                            "price" => 0    
                        ),
                        array(
                            "name" => "Jackpot $1500 + 100 Free Spins",    
                            "price" => 1500
                        ),
                        array(
                            "name" => "YOU WIN $10",    
                            "price" => 10    
                        ),
                        array(
                            "name" => "YOU LOST $25",    
                            "price" => 25   
                        )
                    )
                );               
                break;
            default:
                redirect('/');
                break;
        }  

        $data["totalSpin"] = 5;       
        $this->load->view('wheelgame/wheelgame',$data);    
    }

}
