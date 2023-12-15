import 'package:crud_apps/model/User.dart';
import 'package:flutter/material.dart';
class ViewUser extends StatefulWidget {
final User user;
const ViewUser({super.key, required this.user});
@override
State<ViewUser> createState() => _ViewUserState();
}
class _ViewUserState extends State<ViewUser> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("SQFLite CRUD"),
      ),
      body: Container(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            const Text(
              "Full Details",
              style: TextStyle(
                fontWeight: FontWeight.w600,
                color: Colors.blueGrey,
                fontSize: 20,
              ),
            ),
            const SizedBox(
              height: 20,
            ),
            Row(
              children: [
                const Text('Name',
                  style: TextStyle(
                    color: Colors.teal,
                    fontSize: 16,
                    fontWeight: FontWeight.w600)),
                    Padding(
                      padding: const EdgeInsets.only(left: 30),
                      child: Text(widget.user.name ?? '', style: const TextStyle(fontSize: 16
                      )),
                  ),
              ],
            ),
          const SizedBox(
            height: 20,
          ),
          Row(
            children: [
              const Text('Contact',
                style: TextStyle(
                color: Colors.teal,
                fontSize: 16,
                fontWeight: FontWeight.w600)),
                Padding(
                  padding: const EdgeInsets.only(left: 25),
                  child: Text(widget.user.contact ?? '', style: const TextStyle(fontSize:
                  16)),
                ),
            ],
          ),
          const SizedBox(
            height: 20,
          ),
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              const Text(
                'Description',
                style: TextStyle(
                color: Colors.teal,
                fontSize: 16,
                fontWeight: FontWeight.w600)),
              const SizedBox(
                height: 20,
              ),
              Text(widget.user.description ?? '', style: const TextStyle(fontSize
              : 16)),

              const Text(
                'Address',
                style: TextStyle(
                color: Colors.teal,
                fontSize: 16,
                fontWeight: FontWeight.w600)),
              const SizedBox(
                height: 20,
              ),
              Text(widget.user.address ?? '', style: const TextStyle(fontSize
              : 16)),
            ],
          )
          ],
        ),
    ));
  }
}