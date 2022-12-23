<html>
<head></head>
<body style="word-wrap:break-word;">
<div id="res"></div>
<script>
  window.Android_jsBridge.invoke('spotLeverTestSubmit', JSON.stringify({params: null}, -1), function (responseData) {
      document.write('responseData: ', responseData);
    });
</script>
</body>
</html>
