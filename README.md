# Phrozn - Phing Task

This project add a simple Phing task for Phrozn

```shell
$ phing -f build-example.xml
Buildfile: /home/walter/git/phrozn-phing/build-example.xml

phrozn-example > phrozn.build:

   [phrozn] Run Phrozn Update task source directory: "test/" destination directory:> "test/out"
   [phrozn] Phrozn 0.5.2 DEV by Victor Farazdagi
   [phrozn]
   [phrozn] Starting static site compilation.
   [phrozn]
   [phrozn]   [FAIL]    Source directory '/.phrozn/' not found.
   [phrozn]   [OK]      Destination directory located: /
   [phrozn]
   [phrozn] Phrozn is extremely flexible static site generator for PHP.
   [phrozn] For additional information, see http://phrozn.info

BUILD FINISHED

Total time: 1.1834 second
```
