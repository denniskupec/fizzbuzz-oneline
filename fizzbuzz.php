<?php for($i=1; $i<=100; $i++){ echo ($i % 3 == 0 && $i % 5 == 0) ? "FizzBuzz <br>" : (($i % 3 == 0) ? "Fizz <br>" : (($i % 5 == 0) ? "Buzz<br>" : "$i<br>")); }
