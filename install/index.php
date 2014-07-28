<?php
  $navstep = "Welcome to Bootstrap Community!";
  include("../includes/installheader.php");
?>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Welcome to the Bootstrap Community Installer!</h4>
    This installer will help setup the Bootstrap framework for your server environment. If you're ready to install, click the button below.
    <br />
    <br />
    <a href="" data-target="#licensebox" data-toggle="modal" class="btn btn-primary btn-sm">Get Started</a>
    
	<div class="modal fade" id="licensebox" tabindex="-1" role="dialog" aria-labelledby="licenseBoxLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="licenseBoxLabel">End User License Agreement</h4>
	      </div>
	      <div class="modal-body">
	        <textarea rows="10" class="form-control">
The MIT License (MIT)

Copyright (c) 2014 Oshizu

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
	        </textarea>
	        <p class="text-center">A copy of this license may be obtained from <a href="https://github.com/Oshizu/bootstrap-community" target="_blank">GitHub</a>.</p>
	      </div>
	      <div class="modal-footer">
	        <a href="setup.php" class="btn btn-primary">Agree</a>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
</div>

<?php include("../includes/installfooter.php"); ?>