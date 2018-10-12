<?php include ('parts/header.php'); ?>

<!-- Container start -->
<div id="container" class="animate_300">
<!-- Container start -->

<?php include ('parts/topbar.php'); ?>

<div id="content" class="animate_300">
    <div class="wrapper">
    
    <!-- TEST USE ONLY -->
    
        <label class="fld">
            <div class="sign"><i class="fas fa-user"></i></div>
            <input type="text" class="inp" name="somename" />
        </label>
        
        <br /><br />
    
        <label class="fld">
            <div class="sign"><i class="fas fa-user"></i></div>
            <input type="text" placeholder="Имя и фамилия" name="somename" />
        </label>
        
        <br /><br />
    
        <label class="fld filler">
            <em>Имя и фамилия</em>
            
            <div class="sign"><i class="fas fa-user"></i></div>
            <input type="text" class="inp" name="somename" />
        </label>
        
        <br /><br />
    
        <ul class="accordion">
          <li>
            <a class="toggle_acc" href="javascript:void(0);">Item 1</a>
            <ul class="inner_acc">
              <li>Option 1</li>
              <li>Option 2</li>
              <li>Option 3</li>
            </ul>
          </li>
          
          <li>
            <a class="toggle_acc" href="javascript:void(0);">Item 2</a>
            <ul class="inner_acc">
              <li>Option 1</li>
              <li>Option 2</li>
              <li>Option 3</li>
            </ul>
          </li>
          
          <li>
            <a class="toggle_acc" href="javascript:void(0);">Item 3</a>
            <ul class="inner_acc">
              <li>
                <a href="#" class="toggle_acc">Open Inner</a>
                <div class="inner_acc">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor laoreet volutpat. Aliquam ultrices mauris id mattis imperdiet. Aenean cursus ultrices justo et varius. Suspendisse aliquam orci id dui dapibus
                    blandit. In hac habitasse platea dictumst. Sed risus velit, pellentesque eu enim ac, ultricies pretium felis.
                  </p>
                </div>
              </li>
              
              <li>
                <a href="#" class="toggle_acc">Open Inner #2</a>
                <div class="inner_acc">
                  <p>
                    Children will automatically close upon closing its parent.
                  </p>
                </div>
              </li>
              
              <li>Option 3</li>
            </ul>
          </li>
          
          <li>
            <a class="toggle_acc" href="javascript:void(0);">Item 4</a>
            <ul class="inner_acc">
              <li>
                <a href="#" class="toggle_acc">Technically any number of nested elements</a>
                <ul class="inner_acc">
                  <li>
                    <a href="#" class="toggle_acc">Another nested element</a>
                    <div class="inner_acc">
                      <p>
                        As long as the inner element has inner as one of its classes then it will be toggled.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor laoreet volutpat. Aliquam ultrices mauris id mattis imperdiet. Aenean cursus ultrices justo et varius. Suspendisse aliquam orci id dui dapibus
                        blandit. In hac habitasse platea dictumst. Sed risus velit, pellentesque eu enim ac, ultricies pretium felis.
                      </p>
                    </div>
                  </li>
                </ul>
              </li>
              
              <li>Option 2</li>
              
              <li>Option 3</li>
            </ul>
          </li>
        </ul>
        
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
        content goes here <br /> content goes here <br /> content goes here <br />
                
        <label class="radiocheck">
            <input type="checkbox" class="www" />
            
            <strong>Включить</strong>
        </label>
                
        <label class="radiocheck">
            <input type="radio" name="dinner" class="www" />
            
            <strong>Бургер</strong>
        </label>
                
        <label class="radiocheck">
            <input type="radio" name="dinner" class="www" />
            
            <strong>Пицца</strong>
        </label>
                
        <label class="switcher">
            <input type="checkbox" class="www" />
            
            <div class="signs">
                <i class="fas fa-lock-alt"></i>
                <i class="fas fa-lock-open-alt"></i>
            </div>
            
            <strong>Запомнить</strong>
        </label>
                
        <label class="switcher">
            <input type="checkbox" class="www" />
            
            <div class="signs">
                <i class="fas fa-lock-alt"></i>
                <i class="fas fa-lock-open-alt"></i>
            </div>
            
            <strong>Запомнить</strong>
        </label>
        
    <!-- TEST USE ONLY -->
        
    </div>
    
    <div class="shadow top animate_150"></div>
    <div class="shadow bot animate_150"></div>
</div>

<?php include ('parts/sidebar.php'); ?>

<!-- Background start -->
<div id="background" class="thm_grd full_size">
	<div class="pattern full_size"></div>
</div>
<!-- Background end -->

<!-- Container end -->
</div>
<!-- Container end -->

<?php include ('parts/footer.php'); ?>