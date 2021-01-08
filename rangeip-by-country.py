import requests                                                       

class Runer:
    def __init__(self, coutry):
        self.coutry = coutry
        self.req = 'http://services.ce3c.be/ciprg/?countrys=' + self.coutry + '&format=by+input&format2={startip}\n'
        
    def getIP(self):
        try:
            reqIP = requests.get(self.req)
            IPSplit = reqIP.text.split('\n')
            for ip in IPSplit:
                print('Original IP > {}'.format(ip))
                with open('ori.txt', 'a') as f:
                    f.write(ip+'\n')
                    f.close()
                self.rangeIP(ip)
        except:
            pass
                
    def rangeIP(self, ip):
        try:
            i = ip.split('.')
            for x in range(1, 256):
                genIPs = '{}.{}.{}.{}'.format(i[0], i[1], i[2], str(x))
                print('Ranged > {}'.format(genIPs))
                with open('ranged.txt', 'a') as f:
                        f.write(genIPs+'\n')
                        f.close()
        except:
            pass

def main():
    print('''
\tExample Country\n\tJAPAN,AFGHANISTAN,''')
    coun = input('Country : ')
    gas = Runer(coun)
    gas.getIP()
    
if __name__ == '__main__':
    main()
