<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<title>Quiz</title>
</head>

<body>

<?php
    $name = $_REQUEST[name];
    $id = $_REQUEST[id];
    echo '<h2> Welcome ' . $name . '</h2>';
    echo '<h2> Your ID is: ' . $id . '</h2>';
?>
	<div id="page-wrap">

		<h1 class="transparent index-headline">Quiz</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
		<?php

            ?>    
            <ul id="test-questions">
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 1</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a.  Answer A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b.  Answer B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c.  Answer C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d.  Answer D</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 2</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a.  Answer A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b.  Answer B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c.  Answer C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d.  Answer D</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 3</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a.  Answer A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b.  Answer B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c.  Answer C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d.  Answer D</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 4</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a.  Answer A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b.  Answer B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c.  Answer C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d.  Answer D</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Question 5</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a.  Answer A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b.  Answer B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c.  Answer C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d.  Answer D</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <?php
                        echo '<input type="hidden" name="name" value="'.htmlentities($name).'">';
                        echo '<input type="hidden" name="id" value="'.htmlentities($id).'">';
                    ?>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
		
		</form>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>

</body>
</html>
