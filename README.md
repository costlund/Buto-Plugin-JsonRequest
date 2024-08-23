# Buto-Plugin-JsonRequest

<p>Handle output of json request.</p>
<ul>
<li>Add proper content type header.</li>
<li>Invoking method json_encode.</li>
<li>Output via php exit method.</li>
</ul>

<a name="key_0"></a>

## Usage

<pre><code>wfPlugin::includeonce('json/request');
$jsonRequest = new PluginJsonRequest();
$jsonRequest-&gt;output($data);</code></pre>

<a name="key_1"></a>

## Methods



<a name="key_1_0"></a>

### output

<p>Pass an array as only parameter.</p>

