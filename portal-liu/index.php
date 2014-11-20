<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>LIU Query Builder | PORTAL</title>
    <meta name="generator" content="TextMate http://macromates.com/">
    <meta name="author" content="Joe Mewes">
    <!-- Date: 2014-08-07 -->
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="css/print.css" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.bpopup.min.js"></script>
    <script src="js/spin.min.js"></script>
    <script src="js/init.js"></script>
  </head>
  <body>
  <div class="page">
    <div class="page-inner">
      <header id="header" class="header">
        <div class="header-inner">
          <h2 id="logo" class="logo">LIU Query Builder | PORTAL | <em>by Digital Life Sciences</em></h2>
        </div>
      </header>
      <div class="main-content">
        <div class="main-content-inner">
          <div class="form-wrapper">
          	<div class="select-container">
	          	<form id="select-query-form" class="select-query-form">
		          	<div class="form-inner">
		              <label for="query">Endpoints</label>
					  <select class="form-select" id="edit-endpoint" name="endpoint[]">
		                      <option value="search">Search</option>
		                      <option value="article">Article</option>
		                      <option value="comment">Comment</option>
		              </select>
					</div>
				</form>
          	</div>
          </div>
          <div class="form-wrapper">
          <form accept-charset="UTF-8" id="views-exposed-form-content-api-page-1">
          <div class="views-exposed-form">

            <div class="views-exposed-widgets clearfix">
            	<div class="views-exposed-widget views-widget-filter-keys" id="edit-keys-wrapper">
              <label for="edit-keys">Search Terms</label>
              <div class="views-widget">
                <div class="form-item form-type-textfield form-item-keys">
                  <input type="text" class="form-text" maxlength="128" size="15" value="" name="keys" id="edit-keys" title="Enter the terms you wish to search for.">
                </div>
              </div>
            </div>
			  <div class="views-exposed-widget views-widget-filter-type" id="edit-type-wrapper">
                <label for="edit-type">Type</label>
                <div class="views-widget">
                  <div class="form-item form-type-select form-item-type">
                    <select class="form-select" size="6" id="edit-type" name="type[]" multiple="multiple">
                      <option value="article">Article</option>
                      <option value="blog">Blog</option>
                      <option value="connect_how_to_guide">Connect How To guide</option>
                      <option value="event">Event</option>
                      <option value="ht_activity">Hidden Talents Activity</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="views-exposed-widget views-widget-filter-field_ht_activity_tags_tid" id="edit-field-ht-activity-tags-tid-wrapper">
                  <label for="edit-field-ht-activity-tags-tid">Tags</label>
                        <div class="views-widget">
          <div class="form-item form-type-select form-item-field-ht-activity-tags-tid">
 <select multiple="multiple" name="field_ht_activity_tags_tid[]" id="edit-field-ht-activity-tags-tid" size="6" class="form-select"><option value="active stirling">active stirling</option><option value="Advice">Advice</option><option value="Barra">Barra</option><option value="bedroom equipment">bedroom equipment</option><option value="beds">beds</option><option value="Blindness">Blindness</option><option value="Blogs">Blogs</option><option value="Carers">Carers</option><option value="Chubb">Chubb</option><option value="Co-Design">Co-Design</option><option value="Community">Community</option><option value="Community Alarm">Community Alarm</option><option value="Community Engagement">Community Engagement</option><option value="Community Event">Community Event</option><option value="Communtiy">Communtiy</option><option value="Connect">Connect</option><option value="COPD">COPD</option><option value="Crohn's disease">Crohn's disease</option><option value="Deaf awarenes">Deaf awarenes</option><option value="Dementia">Dementia</option><option value="Edinburgh">Edinburgh</option><option value="Elign">Elign</option><option value="ELREC">ELREC</option><option value="exercise">exercise</option><option value="Experience Guides">Experience Guides</option><option value="Feedback">Feedback</option><option value="feedback session">feedback session</option><option value="Forth Valley">Forth Valley</option><option value="forth valley carer">forth valley carer</option><option value="forth valley walking">forth valley walking</option><option value="forums">forums</option><option value="Get Set Go!">Get Set Go!</option><option value="Glasgow School of Art">Glasgow School of Art</option><option value="Guest Blog">Guest Blog</option><option value="Highland">Highland</option><option value="home adaptations">home adaptations</option><option value="home technology">home technology</option><option value="Inverness">Inverness</option><option value="Jimmy's Blog">Jimmy's Blog</option><option value="keeping well">keeping well</option><option value="Launch">Launch</option><option value="Learning new skills">Learning new skills</option><option value="Life of a Carer">Life of a Carer</option><option value="Long term health condition">Long term health condition</option><option value="Lothian">Lothian</option><option value="Meeting People">Meeting People</option><option value="Men's Shed">Men's Shed</option><option value="mobility scooters">mobility scooters</option><option value="Moray">Moray</option><option value="Nairn">Nairn</option><option value="pain management">pain management</option><option value="Physical Activity">Physical Activity</option><option value="pop up">pop up</option><option value="pop-up">pop-up</option><option value="Self support">Self support</option><option value="Share an interest">Share an interest</option><option value="Shine">Shine</option><option value="sight loss">sight loss</option><option value="social care">social care</option><option value="Spotlight on">Spotlight on</option><option value="stirling">stirling</option><option value="stirling walking network">stirling walking network</option><option value="Telecare">Telecare</option><option value="Telehealth">Telehealth</option><option value="test">test</option><option value="The Next Chapter">The Next Chapter</option><option value="Volunteer week">Volunteer week</option><option value="Volunteering">Volunteering</option><option value="walking">walking</option><option value="walking group">walking group</option><option value="West Lothian">West Lothian</option><option value="Western Isles">Western Isles</option><option value="Workshop">Workshop</option><option value="workshops">workshops</option></select>
</div>
        </div>
              </div>
              <div class="views-exposed-widget views-widget-filter-field_location_tid" id="edit-field-location-tid-wrapper">
                <label for="edit-field-location-tid">Location</label>
                <div class="views-widget">
                  <div class="form-item form-type-select form-item-field-location-tid">
                    <select class="form-select" size="6" id="edit-field-location-tid" name="field_location_tid[]" multiple="multiple">
                      <option value="Living It Up">Living It Up</option>
                      <option value="Forth Valley">Forth Valley</option>
                      <option value="Moray">Moray</option>
                      <option value="Highland">Highland</option>
                      <option value="Lothian">Lothian</option>
                      <option value="Western Isles">Western Isles</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="views-exposed-widget views-widget-filter-nid" id="edit-nid-wrapper">
                <label for="edit-nid">NID</label>
                <div class="views-widget">
                  <div class="form-item form-type-textfield form-item-nid">
                    <input type="text" class="form-text" maxlength="128" size="30" value="" name="nid" id="edit-nid">
                  </div>
                </div>
              </div>
              <div class="sorting-wrapper">
              	<div class="pager-wrapper">
			  	<label for="pager" class="field-label">Pager</label>
		  		<select class="select-options" id="pager" name="pager">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                  <option value="61">61</option>
                  <option value="62">62</option>
                  <option value="63">63</option>
                  <option value="64">64</option>
                  <option value="65">65</option>
                  <option value="66">66</option>
                  <option value="67">67</option>
                  <option value="68">68</option>
                  <option value="69">69</option>
                  <option value="70">70</option>
                  <option value="71">71</option>
                  <option value="72">72</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                  <option value="78">78</option>
                  <option value="79">79</option>
                  <option value="80">80</option>
                  <option value="81">81</option>
                  <option value="82">82</option>
                  <option value="83">83</option>
                  <option value="84">84</option>
                  <option value="85">85</option>
                  <option value="86">86</option>
                  <option value="87">87</option>
                  <option value="88">88</option>
                  <option value="89">89</option>
                  <option value="90">90</option>
                  <option value="91">91</option>
                  <option value="92">92</option>
                  <option value="93">93</option>
                  <option value="94">94</option>
                  <option value="95">95</option>
                  <option value="96">96</option>
                  <option value="97">97</option>
                  <option value="98">98</option>
                  <option value="99">99</option>

                </select>
            </div>
            <div class="results-num-wrapper">
			  	<label for="count" class="field-label">Number of results</label>
		  		<select class="select-options" id="count" name="count">
                  <option value="1">1</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="All">ALL</option>
                </select>
            </div>
              </div><!-- close sorting wrapper -->
            </div>
          </div>
		  </form>
		  </div>
          <div class="form-wrapper">
		  <form id="query-form" class="query-form">
          	<div class="form-inner">
              <label for="query">Query</label>
			  <input id="inputquery" type="text" class="form-text" name="query">
			  <div class="submit-wrapper">
              	<input type="submit" class="form-submit" value="Apply" name="" id="edit-submit-content-api">
			  	<div class="reset-button"><a class="button" href="/test-scripts/query-builder.php">Reset Query</a></div>
			  </div>
			</div>
		  </form>
          </div>
		  <div><pre id="querytext"></pre></div>
        </div> <!-- close main-content-inner -->
      </div> <!-- close main-content -->
      <footer id="footer" class="footer-inner">
        <div class="footer-inner">
          <p>Digital Life Science &copy; 2014</p>
        </div>
      </footer>
    </div>
  </div>
  <script>document.write('<script src="http://liu.joe.dlsdev.co.uk:35729/livereload.js?snipver=1"></' + 'script>')</script>
  <!--<script src="http://localhost:35729/livereload.js?snipver=1"></script>-->
</body>
</html>
