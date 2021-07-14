# Alerts-and-Reporting
This report is a breakdown of events when the SOC analysts noticed some discrepancies with alerting in the Kibana system. An investigation was done to confirm that newly created alerts were working. Once the alerts were proven operational the live traffic was monitored to detect any abnormalities that were not reflected in the alerting system. The findings of this investigation were promptly reported to the SOC team manager.

# Alerts
The alerts implemented and monitored were as follows:

CPU Usage Monitor: This alert monitors system.process.cpu.total.pkt. This alert fires off when the max of system.process.cpu.total.pkt is above 0.5 in the last 5 minutes.

Excessive HTTP Errors: This alert measures http.response.status_code. This alert fires when the number of http.response.status_code exceeds 400 in the last 5 minutes. 

Excessive Http Request Size Monitor: This alert monitors the http.request.bytes. This alert fires off when the sum of http.request.bytes reaches above 3500 bytes in the last minute. 

# Monitoring Behavior
With combined use of the alerts mentioned above and the wireshark software the SOC team were able to pinpoint the malicious behavior acted on the network.
Through investigation the team uncovered that the network was exploited using a Nmap scan, Wordpress Enumeration, and manipulation of weak password policies. 
Further monitoring revealed malicious activity coming from employee ip addresses. It was found that the employees illegally downloaded the June11.dll Trojan and use Bittorrent to download Torrent Betty_Boop_Rhythm_on_the_Reservation.avi.torrent.

# Hardenning
The following methods were suggested to harden the networks security:

Nmap Scan: To prevent an Nmap scan a default-deny rule should be implemented to deny all outside access except to allowed ports( Default-Deny for commands).

WordPress Enumeration: In order to protect against WordPress enumeration changes need to be made to the functions.php file(See Functions.php)

Unprotected and Unsalted Hashes : In order to increase the strength of passwords requirements can be more strict such as requiring upper and lowercase numbers, numbers, characters, length, etc. In order to make hashes stronger it is suggested to salt them with such websites as https://www.symbionts.de/tools/hash/sha256-hash-salt-generator.html. 

# Conclusion
With the correct alerts up and running the SOC team was able to detect malicious activity and the methods used to commit it. Besides outside attacks the team was also able to find employee activity that jeopardized company information. The team has suggested necessary and effective hardening methods to mitigate future breaches. We also suggested that those employees who downloaded malicious files be reprimanded and a company wide class be given on the importance of cyber security.

