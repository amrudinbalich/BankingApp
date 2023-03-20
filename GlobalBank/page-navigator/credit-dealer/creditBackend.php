<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // collect an information from a frontend
    // setting variables and values
    // year income
    $yearIncome = $_POST['yearIncome'] ;
    // see which one option for a credit did a customer picked up 
    // setting a credit value based on a option that is selected
    if(isset($_POST['5000'])) {
        $credit = 5000;
    }
    if(isset($_POST['10000'])) {
        $credit = 10000;
    }
    if(isset($_POST['15000'])) {
        $credit = 15000;
    }

}

function takeACredit($yearIncome,$credit) {
    $creditMax = 0 ;
    // if user don't have year income higher than 10000 do not allow him to take a credit
    if($yearIncome < 10000) {
        $creditMax = 0;
        $response = array("credit" => $creditMax,"responseTxt" => array("html" => "<p>We are so sorry , but you don't have enough of year income for any of our packets.</p>" ));
        echo json_encode($response);
    }
    // tier 1
    if ($yearIncome < 20000 && $yearIncome > 10000) { 
        $creditMax = 5000;
        if ($credit > $creditMax) { 
            // suggest creditMax value to a costumer
            // making an array and echoing it out in a JSON format
            $response = array(
                "credit" => $creditMax,
                "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                              "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                              "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                              "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                )
            );
            echo json_encode($response);
            }
            elseif ($credit <= $creditMax) { 
                $response = array(
                    "credit" => $credit , 
                    "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                    )
                );
                echo json_encode($response); 
            }
     }
     // tier 2
    if ($yearIncome < 30000 && $yearIncome > 20000) { 
        $creditMax = 10000;
        if ($credit > $creditMax) { 
            // suggest creditMax value to a costumer
            // making an array and echoing it out in a JSON format
            $response = array(
                "credit" => $creditMax,
                "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                              "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                              "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                              "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                )
            );
            echo json_encode($response);
            }
            elseif ($credit <= $creditMax) { 
                $response = array(
                    "credit" => $credit , 
                    "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                    )
                );
                echo json_encode($response); 
            }
     }
     // tier 3
    if ($yearIncome < 50000 && $yearIncome > 30000) { 
        $creditMax = 10000;
        if ($credit > $creditMax) { 
            // suggest creditMax value to a costumer
            // making an array and echoing it out in a JSON format
            $response = array(
                "credit" => $creditMax,
                "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                              "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                              "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                              "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                )
            );
            echo json_encode($response);
            }
            elseif ($credit <= $creditMax) { 
                $response = array(
                    "credit" => $credit , 
                    "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                    )
                );
                echo json_encode($response); 
            }
     }
     // tier 4
     if ($yearIncome < 70000 && $yearIncome > 50000) { 
        $creditMax = 15000;
        if ($credit > $creditMax) { 
            // suggest creditMax value to a costumer
            // making an array and echoing it out in a JSON format
            $response = array(
                "credit" => $creditMax,
                "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                              "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                              "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                              "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                )
            );
            echo json_encode($response);
            }
            elseif ($credit <= $creditMax) { 
                $response = array(
                    "credit" => $credit , 
                    "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                    )
                );
                echo json_encode($response); 
            }
     }
          // tier 5
          if ($yearIncome < 100000 && $yearIncome > 70000) { 
            $creditMax = 30000;
            if ($credit > $creditMax) { 
                // suggest creditMax value to a costumer
                // making an array and echoing it out in a JSON format
                $response = array(
                    "credit" => $creditMax,
                    "responseTxt" => array(
                        "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                                  "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                                  "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                                  "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                    )
                );
                echo json_encode($response);
                }
                elseif ($credit <= $creditMax) { 
                    $response = array(
                        "credit" => $credit , 
                        "responseTxt" => array(
                        "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                    "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                    "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                        )
                    );
                    echo json_encode($response); 
                }
                elseif ($credit == $creditMax) { 
                    $response = array(
                        "credit" => $credit , 
                        "responseTxt" => array(
                        "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                    "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                    "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                        )
                    );
                    echo json_encode($response); 
                }
         }
         // tier 5
     if ($yearIncome > 100000) { 
        $creditMax = 50000;
        if ($credit > $creditMax) { 
            // suggest creditMax value to a costumer
            // making an array and echoing it out in a JSON format
            $response = array(
                "credit" => $creditMax,
                "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>Your year income is not high enough for this packet.</p>" .
                              "<p class='m-0 p-0'>Do you want to take <strong>$creditMax$</strong> instead ?</p>" .
                              "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light'>Take Credit</button>" .
                              "<button type='submit' id='dontTake' name='dontTakeACredit' class='btn btn-sm btn-danger ms-2 mt-2'>Don't Take</button>"
                )
            );
            echo json_encode($response);
            }
            elseif ($credit <= $creditMax) { 
                $response = array(
                    "credit" => $credit , 
                    "responseTxt" => array(
                    "html" => "<p class='m-0 p-0'>It seems that your year income meets our standards.</p>" .
                                "<p class='m-0 p-0'>In order to take a credit please again confirm your appeal by clicking on a button</p>" .
                                "<button type='submit' id='yesTake' name='takeACredit' class='btn btn-sm btn-info me-2 mt-2 text-light col-4'>Take Credit</button>"
                    )
                );
                echo json_encode($response); 
            }
     }
    }
    

// call a function
takeACredit($yearIncome,$credit);
// $take = takeACredit($yearIncome,$childrenNum,$business,$credit);


