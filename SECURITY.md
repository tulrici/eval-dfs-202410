# SECURITY

Vulnerabilities are reported here until they are fixed.

## VULNERABILITY #32
### Summary
_An unsafe credentials vulnerability allows any unauthenticated user to execute the webhooks manager._

### Details
_File hooks.php, with public access, should only be called by known and authorized hosts. It seems credentials are not checked so that anyone can trigger the webhooks remotely without credentials._

### PoC
_Directly call hooks.php from web browser or cURL GET request with no credentials._

### Impact
_Any HTTP request can trigger the webhooks from any address without auth which can be involved in  DDOS attack._
